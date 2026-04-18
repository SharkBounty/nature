<?php
require_once __DIR__ . '/monitor.php';
$showVSL = checkAccess();

if (!$showVSL) {
    include 'recetas.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <!-- Viewport adjustment for mobile/desktop -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo Natural</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <!-- Common CSS (Absolute Path) -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <!-- UTMify Scripts (Common) -->
    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-subids async defer></script>
    <!-- teste -->
    <script>!function (i, n) { i._plt = i._plt || (n && n.timeOrigin ? n.timeOrigin + n.now() : Date.now()) }(window, performance);</script>
    <link rel="preload"
        href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/698aabbc08ae119f5e0219dd/v4/player.js"
        as="script">
    <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
    <link rel="preload"
        href="https://cdn.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/698aab7d2d330b14411673fb/main.m3u8"
        as="fetch">
    <link rel="dns-prefetch" href="https://cdn.converteai.net">
    <link rel="dns-prefetch" href="https://scripts.converteai.net">
    <link rel="dns-prefetch" href="https://images.converteai.net">
    <link rel="dns-prefetch" href="https://api.vturb.com.br">

    <style>
        /* Ensure VSL is visible immediately */
        body .vsl-content {
            display: block;
            opacity: 1;
        }

        /* Override for simple white theme (Upsell) */
        body {
            background-color: #fff !important;
            color: #000 !important;
        }

        footer {
            border-top: 1px solid #ccc !important;
            color: #333 !important;
        }

        .video-box {
            background: transparent !important;
            box-shadow: none !important;
        }
    </style>

    <script>
        // Start Date Timer (Common util but used in VSL)
        function updateDate() {
            const el = document.getElementById("dynamicDate");
            if (!el) return;
            const now = new Date();
            const day = String(now.getDate()).padStart(2, '0');
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const year = now.getFullYear();
            el.textContent = `${day}/${month}/${year}`;
        }

        document.addEventListener("DOMContentLoaded", function () {
            updateDate();
        });
    </script>
</head>

<body>

    <!-- Pixel (Common) -->
    <script>
        window.pixelId = "69579a8be70c757a1b85066e";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
        document.head.appendChild(a);
    </script>



    <!-- =========================================
         VSL CONTENT (Mobile / Token)
         ========================================= -->
    <div class="vsl-content">

        <div class="container">
            <div class="hero">
                <!-- Video Container -->
                <div class="video-box">
                    <vturb-smartplayer id="vid-698aabbc08ae119f5e0219dd"
                        style="display: block; margin: 0 auto; width: 100%; max-width: 400px;"></vturb-smartplayer>
                    <script
                        type="text/javascript"> var s = document.createElement("script"); s.src = "https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/698aabbc08ae119f5e0219dd/v4/player.js", s.async = !0, document.head.appendChild(s); </script>
                </div>

                <!-- HOTMART - Sales Funnel Widget -->
                <!--- sales funnel container --->
                <div id="hotmart-sales-funnel"></div>

                <!--- script load and setup --->
                <script src="https://checkout.hotmart.com/lib/hotmart-checkout-elements.js"></script>
                <script>
                    checkoutElements.init('salesFunnel').mount('#hotmart-sales-funnel')
                </script>
                <!-- HOTMART - Sales Funnel Widget -->

                <!-- Viewers count removed for upsell page -->

                <!-- External Delay Script (Syncs with VSL Time) -->
                <script src="/js/delay.js"></script>

                <script>
                    // BACK REDIRECT LOGIC (NEW)
                    // ALTERE O LINK PARA A PÁGINA QUE QUISER MOSTRAR QUANDO O USUÁRIO TENTAR SAIR
                    const link = '/promocion'; // Updated to relative path

                    function setBackRedirect(url) {
                        let urlBackRedirect = url;
                        urlBackRedirect = urlBackRedirect =
                            urlBackRedirect.trim() +
                            (urlBackRedirect.indexOf('?') > 0 ? '&' : '?') +
                            document.location.search.replace('?', '').toString();

                        history.pushState({}, '', location.href);
                        history.pushState({}, '', location.href);
                        history.pushState({}, '', location.href);

                        window.addEventListener('popstate', () => {
                            console.log('onpopstate', urlBackRedirect);
                            setTimeout(() => {
                                location.href = urlBackRedirect;
                            }, 1);
                        });
                    }

                    setBackRedirect(link);
                </script>
            </div>
        </div>

        <footer>
            Copyrights 2025 - Protocolo Natural ®<br>
            Todos os direitos reservados.
        </footer>
    </div>

</body>

</html>