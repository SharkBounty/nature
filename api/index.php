<?php
require_once __DIR__ . '/monitor.php';

$showVSL = checkAccess();

if (!$showVSL) {
    include 'recetas.php';
    exit;
}

// Se passou pelo checkAccess, agora disparamos a CAPI do Reddit manualmente
$utm_source = $_GET['utm_source'] ?? '';
if ($utm_source === 'reddit') {
    $rdt_cid = $_GET['rdt_cid'] ?? null;
    trackRedditPageVisit($rdt_cid, $event_id);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Taboola Pixel Code -->
    <?php if (isset($_GET['utm_source']) && $_GET['utm_source'] === 'taboola'): ?>
        <script type='text/javascript'>
        window._tfa = window._tfa || [];
        window._tfa.push({notify: 'event', name: 'page_view', id: 2017232});
        !function (t, f, a, x) {
                if (!document.getElementById(x)) {
                    t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
                }
        }(document.createElement('script'),
        document.getElementsByTagName('script')[0],
        '//cdn.taboola.com/libtrc/unip/2017232/tfa.js',
        'tb_tfa_script');
        </script>
    <?php endif; ?>
    <!-- End of Taboola Pixel Code -->
     <!-- Reddit Pixel Code -->
     <?php if (isset($_GET['utm_source']) && $_GET['utm_source'] === 'reddit'): ?>
        <script>
            !function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js?pixel_id=a2_iwlpev9kbqi2",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);
            rdt('init','a2_iwlpev9kbqi2');
            rdt('track', 'PageVisit', { 'externalId': '<?= $event_id ?>' });
        </script>
    <?php endif; ?>
    <!-- Reddit Pixel Code -->

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
<script>!function(i,n){i._plt=i._plt||(n&&n.timeOrigin?n.timeOrigin+n.now():Date.now())}(window,performance);</script>
<link rel="preload" href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/ab-test/69c073e4137969468e7d4f00/player.js" as="script">
<link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js" as="script">
<link rel="dns-prefetch" href="https://cdn.converteai.net">
<link rel="dns-prefetch" href="https://scripts.converteai.net">
<link rel="dns-prefetch" href="https://images.converteai.net">
<link rel="dns-prefetch" href="https://m3u8.vturb.net">
<link rel="dns-prefetch" href="https://api.vturb.com.br">

    <style>
        /* Ensure VSL is visible immediately */
        body .vsl-content {
            display: block;
            opacity: 1;
        }

        /* Override for simple black theme */
        body {
            background-color: #000 !important;
            color: #fff !important;
        }

        .viewers-count {
            color: #fff !important;
        }

        footer {
            border-top: 1px solid #333 !important;
            color: #888 !important;
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

            // // LAZY LOAD VIDEO SCRIPT
            // if (!document.getElementById("vturb-script")) {
            //     var s = document.createElement("script");
            //     s.src = "https://scripts.converteai.net/7f6bb9c5-ce63-4ab2-992d-8b1617c66949/players/69574056bfcaaae23ccb95b3/v4/player.js";
            //     s.async = true;
            //     s.id = "vturb-script";
            //     document.head.appendChild(s);
            // }
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
        <!-- Header Strip -->
        <!-- Header Strip Removed -->

        <div class="container">
            <div class="hero">
                <!-- Headline Removed -->

                <!-- Video Container -->
                <div class="video-box">
                    <vturb-smartplayer id="ab-69c073e4137969468e7d4f00" style="display: block; margin: 0 auto; width: 100%; "></vturb-smartplayer> <script type="text/javascript"> var s=document.createElement("script"); s.src="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/ab-test/69c073e4137969468e7d4f00/player.js", s.async=!0,document.head.appendChild(s); </script>
                </div>

                <div class="viewers-count">
                    <div class="live-dot"></div>
                    <span><strong id="viewerCount">187</strong> personas están viendo esto ahora</span>
                </div>

                <script>
                    // Dynamic Viewer Count Script
                    let viewers = 187;
                    function updateViewers() {
                        viewers += Math.random() < 0.6 ? Math.floor(Math.random() * 3) + 1 : -Math.floor(Math.random() * 2);
                        viewers = Math.max(140, Math.min(480, viewers));

                        const el = document.getElementById("viewerCount");
                        if (el) el.textContent = viewers;

                        setTimeout(updateViewers, 2000 + Math.random() * 3000);
                    }
                    setTimeout(updateViewers, 3000);
                </script>

                <!-- Logos -->
                <!-- Logos Removed -->

                <!-- Hotmart Buy Button (Hidden for Vturb Trigger) -->
                <script type="text/javascript">
                    function importHotmart() {
                        var imported = document.createElement('script');
                        imported.src = 'https://static.hotmart.com/checkout/widget.min.js';
                        document.head.appendChild(imported);
                        var link = document.createElement('link');
                        link.rel = 'stylesheet';
                        link.type = 'text/css';
                        link.href = 'https://static.hotmart.com/css/hotmart-fb.min.css';
                        document.head.appendChild(link);
                    }
                    importHotmart(); 
                </script>
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <a onclick="return false;" href="https://pay.hotmart.com/V103992704Q?checkoutMode=2"
                        class="comprar hotmart-fb hotmart__button-checkout" style="display: none;">Aceder agora!</a>
                </div>

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
            Copyright 2025 - Protocolo Natural ®<br>
            Todos os direitos reservados.
        </footer>
    </div>

</body>

</html>