<?php
require_once __DIR__ . '/monitor.php';
$showContent = checkAccess();

if (!$showContent) {
    include 'recetas.php';
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-subids async defer></script>

    <!-- Pixel (Common) -->
    <script>
        window.pixelId = "69579a8be70c757a1b85066e";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
        document.head.appendChild(a);
    </script>

    <!-- OFFER PAGE METADATA -->
    <title>Oferta Exclusiva - Protocolo Natural</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
    <meta name="description"
        content="Aproveita hoje mesmo o desconto de 50% no Protocolo Natural. Oferta limitada para selecionados.">
    <link rel="stylesheet" href="/promocion/css/style.css">
</head>

<body>

    <!-- OFFER PAGE CONTENT -->
    <div class="announcement-bar">
        ⚠️ CUPÃO DE DESCONTO ATIVADO APENAS POR HOJE
    </div>

    <main class="container">
        <header class="header">
            <h1 class="headline">PARABÉNS! <br><span class="highlight">FOSTE O ESCOLHIDO</span></h1>
            <p class="selection-text">Foste selecionado e acabaste de ganhar <strong>50% de desconto</strong> no
                Protocolo Natural.</p>
        </header>

        <section class="offer-card">
            <div class="mentor-info">
                <span class="mentor-name">De: Rocco Siffredi...</span>
            </div>

            <div class="copy-content">
                <p>Não quero que o dinheiro seja um problema quando se trata de resolver um problema que acaba com a
                    dignidade do homem.</p>

                <p>Entendo o quão vergonhoso é tornar-se motivo de chacota, já que isso destrói completamente a
                    autoestima e a vontade de viver.</p>

                <p>Acreditamos que todos merecem a oportunidade de desfrutar dos benefícios do Protocolo Natural sem que
                    o custo seja um obstáculo.</p>

                <p>Por essa razão, criámos um programa exclusivo no qual selecionamos aleatoriamente um homem em cada 50
                    visitantes da nossa página para receber uma oferta especial.</p>

                <p>E, embora pareça incrível, desta vez tu foste o feliz contemplado.</p>

                <p>Gostaríamos de te dar a oportunidade única de adquirir o Protocolo Natural com um incrível desconto
                    de 50%, como forma de agradecer o teu interesse e confiança.</p>

                <p>Não deixes passar esta oportunidade. Sabemos que este pode ser um passo importante na vida de um
                    homem.</p>

                <p>Não permitas que o dinheiro seja um obstáculo para a tua transformação.</p>
            </div>

            <div class="pricing-section">
                <div class="price-container">
                    <span class="old-price">De: $19</span>
                    <span class="new-price">POR APENAS: <span class="amount">$14</span></span>
                </div>

                <a href="https://pay.hotmart.com/V103992704Q?off=i0k43cfz" id="cta-button" class="cta-button">
                    SIM! QUERO O MEU ACESSO AGORA
                </a>

                <p class="guarantee-text">🔒 Pagamento seguro e acesso instantâneo</p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p>© 2025 Protocolo Natural. Todos os direitos reservados.</p>
    </footer>

</body>

</html>