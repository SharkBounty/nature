<?php
require_once __DIR__ . '/monitor.php';
$showContent = checkAccess();

if (!$showContent) {
    include 'recetas.php';
    exit;
}
// Downsell Page - Oferta
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protocolo Natural - Oferta Especial</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>

    <!-- Common CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap" rel="stylesheet">


    <!-- UTMify Scripts -->
    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-subids async defer></script>

    <style>
        /* Base Reset & Common Styles Override for this specific page if needed */
        body {
            background-color: #fff;
            color: #333;
            font-family: 'Arial', sans-serif;
            /* Per user request for this section */
        }

        .announcement-bar {
            background-color: #000;
            color: #ff0000;
            text-align: center;
            padding: 12px;
            font-weight: bold;
            border-bottom: 2px solid #ff0000;
        }

        .container-offer {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .headline {
            font-size: 2.5rem;
            color: #111;
            line-height: 1.1;
            margin-bottom: 10px;
        }

        .highlight {
            color: #c00;
        }

        .header p {
            font-size: 1.2rem;
            color: #555;
            margin-top: 15px;
        }

        .offer-card {
            background: #f9f9f9;
            border: 2px dashed #ccc;
            padding: 30px;
            border-radius: 15px;
        }

        .mentor-info strong {
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .copy-content {
            line-height: 1.6;
            color: #333;
            font-size: 1.1rem;
        }

        .discount-box {
            background: #fff3cd;
            padding: 10px;
            border-left: 5px solid #ffc107;
            margin: 20px 0;
        }

        .pricing-section {
            text-align: center;
            margin-top: 40px;
        }

        .price-container {
            margin-bottom: 25px;
        }

        .cta-button {
            display: block;
            background: #28a745;
            color: white;
            text-decoration: none;
            padding: 25px;
            font-size: 1.6rem;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(40, 167, 69, 0.3);
            transition: transform 0.2s;
        }

        .cta-button:hover {
            transform: scale(1.02);
            text-decoration: none;
            color: white;
        }

        .no-thanks {
            color: #999;
            text-decoration: underline;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>

    <!-- Pixel -->
    <script>
        window.pixelId = "69579a8be70c757a1b85066e";
        var a = document.createElement("script");
        a.setAttribute("async", "");
        a.setAttribute("defer", "");
        a.setAttribute("src", "https://cdn.utmify.com.br/scripts/pixel/pixel.js");
        document.head.appendChild(a);
    </script>

    <div class="announcement-bar">
        ⚠️ ESTA OFERTA EXPIRA EM: <span id="timer">05:00</span> MINUTOS
    </div>

    <main class="container-offer">
        <header class="header">
            <h1 class="headline">
                ESPERA! NÃO TE VÁS SEM <br>
                <span class="highlight">A CHAVE DA TUA VIRILIDADE</span>
            </h1>
            <p>
                Eu percebi que os $40 podem ter pesado agora. Mas eu não quero que a falta de $13 te impeça de ter
                ereções de aço <strong>ainda hoje</strong>.
            </p>
        </header>

        <section class="offer-card">
            <div class="mentor-info" style="margin-bottom: 20px;">
                <strong>De: Rocco Siffredi</strong>
                <hr style="border: 0; border-top: 1px solid #ddd; margin-top: 10px;">
            </div>

            <div class="copy-content">
                <p>O <strong>Acelerador de Fluxo</strong> não é apenas um "extra". É o que garante que o teu corpo
                    responda ao protocolo 10x mais depressa, limpando as toxinas que bloqueiam o sangue.</p>

                <p>Sei que já investiste $19 no Protocolo Principal. Por isso, para garantir que tenhas sucesso
                    absoluto, tomei uma decisão de última hora:</p>

                <p class="discount-box">
                    <strong>Vou liberar uma das últimas 12 licenças de hoje com 32% de desconto extra.</strong>
                </p>

                <p>Não vais pagar $40. Vais levar o Acelerador por apenas <strong>$27</strong>.</p>

                <p>É um valor único, apenas para esta página. Se saíres agora, o sistema entende que não tens interesse
                    e o preço volta ao normal de $550 para a próxima pessoa da fila.</p>
            </div>

            <div class="pricing-section">
                <div class="price-container">
                    <span style="text-decoration: line-through; color: #999; font-size: 1.3rem;">De: $40</span><br>
                    <span style="font-size: 2.8rem; font-weight: 900; color: #28a745;">
                        SÓ HOJE: $27
                    </span>
                </div>

                <a href="TEU_LINK_DE_CHECKOUT_27" class="cta-button">
                    SIM! ADICIONAR O ACELERADOR AGORA
                </a>

                <div style="margin-top: 25px;">
                    <a href="LINK_DA_ENTREGA_PRODUTO_19" class="no-thanks">
                        Não, eu prefiro o caminho mais lento e arriscar não ter resultados imediatos.
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Script simples para o contador de 5 minutos
        var duration = 60 * 5;
        var display = document.querySelector('#timer');
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);
            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.textContent = minutes + ":" + seconds;
            if (--timer < 0) timer = 0;
        }, 1000);
    </script>

</body>

</html>