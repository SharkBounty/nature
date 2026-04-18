<?php
// Simple Thank You Page
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciativa Importante - Obrigado</title>
    s
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- UTMify Scripts -->
    <script src="https://cdn.utmify.com.br/scripts/utms/latest.js" data-utmify-prevent-subids async defer></script>

    <style>
        body {
            background-color: #f8f9fa !important;
            color: #1a1a1a !important;
            font-family: 'Inter', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
            background-image:
                radial-gradient(at 0% 0%, hsla(253, 16%, 7%, 1) 0, transparent 50%),
                radial-gradient(at 50% 0%, hsla(225, 39%, 30%, 1) 0, transparent 50%),
                radial-gradient(at 100% 0%, hsla(339, 49%, 30%, 1) 0, transparent 50%);
            background-size: cover;
            background-attachment: fixed;
        }

        .thank-you-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            padding: 50px 40px;
            max-width: 500px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .success-icon {
            color: #2ecc71;
            font-size: 4rem;
            margin-bottom: 20px;
            animation: popIn 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 800;
            color: #111;
            line-height: 1.2;
            letter-spacing: -0.02em;
        }

        .highlight-text {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 25px;
            color: #555;
            font-weight: 400;
        }

        .email-notice {
            background-color: #f0f7ff;
            border-left: 4px solid #3498db;
            padding: 15px;
            border-radius: 8px;
            text-align: left;
            margin-bottom: 30px;
            font-size: 0.95rem;
            color: #2c3e50;
        }

        .email-notice i {
            color: #3498db;
            margin-right: 8px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #25D366;
            color: white !important;
            text-decoration: none;
            font-weight: 600;
            padding: 16px 32px;
            border-radius: 50px;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
            width: 100%;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 211, 102, 0.4);
            background-color: #20bd5a;
        }

        .cta-button i {
            margin-right: 10px;
            font-size: 1.3rem;
        }

        .support-email {
            font-size: 0.95rem;
            color: #7f8c8d;
            margin-top: 10px;
        }

        .support-email a {
            color: #34495e;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }

        .support-email a:hover {
            color: #2c3e50;
            text-decoration: underline;
        }

        .welcoming-quote {
            margin-top: 35px;
            font-style: italic;
            color: #555;
            font-size: 1.05rem;
            font-weight: 500;
            position: relative;
            padding: 0 10px;
        }

        .welcoming-quote::before {
            content: '"';
            font-size: 3rem;
            color: #e0e0e0;
            position: absolute;
            top: -20px;
            left: -10px;
            z-index: -1;
            font-family: serif;
        }

        footer {
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            font-size: 0.85rem;
            color: #95a5a6 !important;
        }

        @keyframes popIn {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            80% {
                transform: scale(1.1);
                opacity: 1;
            }

            100% {
                transform: scale(1);
            }
        }

        /* Mobile Adjustments */
        @media (max-width: 480px) {
            .thank-you-container {
                padding: 30px 20px;
            }

            h1 {
                font-size: 1.75rem;
            }
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

    <div class="thank-you-container">
        <div class="success-icon">
            <i class="fas fa-check-circle"></i>
        </div>

        <h1>Parabéns por essa <span class="highlight-text">iniciativa importante!</span></h1>

        <div class="email-notice">
            <i class="fas fa-envelope-open-text"></i>
            O seu acesso chegará no seu e-mail em alguns minutos. Caso não encontre, verifique sua caixa de spam ou lixo
            eletrônico.
        </div>

        <p style="margin-bottom: 10px; font-weight: 600; color: #333;">
            Qualquer dúvida, fale conosco:
        </p>

        <a href="https://wa.me/5516981046929" class="cta-button" target="_blank">
            <i class="fab fa-whatsapp"></i> Falar no WhatsApp
        </a>

        <div class="support-email">
            Ou envie um e-mail para: <br>
            <a href="mailto:atendimento@vivalis.fit">atendimento@vivalis.fit</a>
        </div>

        <div class="welcoming-quote">
            "Estamos aqui para te acolher e acompanhar durante todo o seu processo de transformação."
        </div>

        <footer>
            Copyright © 2025 - Protocolo Natural ®<br>
            Todos os direitos reservados.
        </footer>
    </div>

</body>

</html>