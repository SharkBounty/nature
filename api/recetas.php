<?php
    // Se passou pelo checkAccess, agora disparamos a CAPI do Reddit manualmente
    $utm_source = $_GET['utm_source'] ?? '';
    if ($utm_source === 'reddit') {
        $rdt_cid = $_GET['rdt_cid'] ?? null;
        trackRedditPageVisit($rdt_cid, $event_id);
    }
?>

<!DOCTYPE html>
<html lang="pt-PT">

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
                require_once 'reddit_tracker.php';
               
                rdt('init','a2_iwlpev9kbqi2');
                rdt('track', 'PageVisit', { 'externalId': '<?= $event_id ?>' });
        </script>
    <?php endif; ?>
    <!-- Reddit Pixel Code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotina de Saúde Natural</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
    <meta name="description"
        content="Aprende hábitos naturais para melhorar a tua saúde e rotina.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #0066ff;
            --secondary: #2c3e50;
            --accent: #e74c3c;
            --light: #ecf0f1;
            --dark: #2c3e50;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #fff;
        }

        h1, h2, h3 {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.2;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 40px 20px 60px;
            text-align: center;
        }

        .hero-badge {
            display: inline-block;
            background: rgba(0, 102, 255, 0.1);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .hero h1 {
            color: var(--secondary);
            font-size: 2.2rem;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 650px;
            margin: 0 auto 30px;
            color: #555;
        }

        .video-wrapper {
            max-width: 800px;
            margin: 0 auto 30px;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            background: #000;
            overflow: hidden;
            position: relative;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 20px 40px;
            font-size: 1.3rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 8px 20px rgba(0, 102, 255, 0.3);
            transition: all 0.3s ease;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            width: 100%;
            max-width: 500px;
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 25px rgba(0, 102, 255, 0.4);
            background-color: #0052cc;
        }

        /* FEATURES SECTION */
        .section {
            padding: 60px 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .section h2 {
            text-align: center;
            color: var(--dark);
            margin-bottom: 40px;
            font-size: 2rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }

        .feature h3 {
            margin-bottom: 15px;
            color: var(--secondary);
            font-size: 1.3rem;
        }

        .feature p {
            color: #666;
            font-size: 1rem;
        }

        /* OFFER SECTION */
        .offer-section {
            background-color: #f8f9fa;
            padding: 60px 20px;
        }

        .offer-box {
            background: #fff;
            border: 2px solid var(--primary);
            border-radius: 20px;
            padding: 50px 30px;
            text-align: center;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 15px 40px rgba(0, 102, 255, 0.1);
        }

        .offer-box h3 {
            font-size: 1.8rem;
            color: var(--dark);
            margin-bottom: 15px;
        }

        .offer-box > p {
            color: #666;
            margin-bottom: 30px;
        }

        .price-tag {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark);
            margin: 20px 0;
        }

        .old-price {
            text-decoration: line-through;
            color: #95a5a6;
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .benefits-list {
            text-align: left;
            max-width: 350px;
            margin: 0 auto 30px;
            list-style: none;
        }

        .benefits-list li {
            margin-bottom: 15px;
            font-size: 1.1rem;
            color: #444;
            display: flex;
            align-items: center;
        }
        
        .benefits-list li::before {
            content: "✅";
            margin-right: 10px;
        }

        .guarantee {
            margin-top: 25px;
            font-size: 0.95rem;
            color: #7f8c8d;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* FOOTER */
        footer {
            background: #1e293b;
            color: #94a3b8;
            padding: 50px 20px;
            font-size: 0.85rem;
        }
        
        .footer-content {
            max-width: 1000px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: left;
        }

        footer h4 {
            color: #f8fafc;
            margin-bottom: 15px;
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        footer p {
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .footer-links {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #334155;
        }

        .footer-links a {
            color: #cbd5e1;
            margin: 0 15px;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-links a:hover {
            color: #fff;
        }
        
        .copyright {
            text-align: center;
            margin-top: 20px;
            color: #64748b;
        }
    </style>
</head>

<body>

    <!-- HERO SECTION COM VSL -->
    <header class="hero">
        <div class="container" style="max-width: 1000px; margin: 0 auto;">
            <div class="hero-badge">Apresentação Especial</div>
            <h1>Descobre o Segredo Para Uma Rotina Com Mais Energia e Disposição</h1>
            <p>Assiste ao vídeo abaixo com atenção para entenderes o passo a passo de como aplicar este método natural na tua vida diária.</p>

            <!-- VSL Video -->
            <div class="video-wrapper">
                <vturb-smartplayer id="vid-69923cd09256726183cee2e3"
                    style="display: block; margin: 0 auto; width: 100%; "></vturb-smartplayer>
                <script
                    type="text/javascript"> var s = document.createElement("script"); s.src = "https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/69923cd09256726183cee2e3/v4/player.js", s.async = !0, document.head.appendChild(s); </script>
                <script>!function (i, n) { i._plt = i._plt || (n && n.timeOrigin ? n.timeOrigin + n.now() : Date.now()) }(window, performance);</script>
                <link rel="preload"
                    href="https://scripts.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/players/69923cd09256726183cee2e3/v4/player.js"
                    as="script">
                <link rel="preload" href="https://scripts.converteai.net/lib/js/smartplayer-wc/v4/smartplayer.js"
                    as="script">
                <link rel="preload"
                    href="https://cdn.converteai.net/9ed40df3-2499-49b8-b777-b51d01cb3572/69923c67725525410351094a/main.m3u8"
                    as="fetch">
                <link rel="dns-prefetch" href="https://cdn.converteai.net">
                <link rel="dns-prefetch" href="https://scripts.converteai.net">
                <link rel="dns-prefetch" href="https://images.converteai.net">
                <link rel="dns-prefetch" href="https://api.vturb.com.br">
            </div>

            <button class="btn go-to-checkout">QUERO ACEDER AGORA</button>
        </div>
    </header>

    <!-- FEATURES SECTION -->
    <section class="section">
        <h2>O Que Vais Descobrir Neste Guia</h2>
        <div class="feature-grid">
            <div class="feature">
                <span class="feature-icon">🔋</span>
                <h3>Mais Energia</h3>
                <p>Aprende hábitos simples que ajudam a combater a fadiga e trazem mais disposição para o teu dia a dia.</p>
            </div>
            <div class="feature">
                <span class="feature-icon">🌿</span>
                <h3>Método 100% Natural</h3>
                <p>Descobre como utilizar ingredientes naturais que já tens em casa para melhorar o teu bem-estar.</p>
            </div>
            <div class="feature">
                <span class="feature-icon">🛡️</span>
                <h3>Mais Qualidade de Vida</h3>
                <p>Uma rotina prática e testada para fortalecer o teu corpo e trazer mais equilíbrio sem depender de produtos químicos.</p>
            </div>
        </div>
    </section>

    <!-- OFFER SECTION -->
    <section class="offer-section" id="comprar">
        <div class="offer-box">
            <h3>Acesso Imediato ao Guia</h3>
            <p>Tem acesso completo ao material digital em PDF imediatamente após a confirmação.</p>

            <div class="price-tag">
                <span class="old-price">29.99€</span>
                9,90€
            </div>

            <ul class="benefits-list">
                <li>Acesso Imediato (Download)</li>
                <li>Passo a Passo Completo</li>
                <li>Receitas e Hábitos Práticos</li>
                <li>Garantia de 7 Dias</li>
            </ul>

            <button class="btn go-to-checkout">ACEDER AO GUIA COMPLETO</button>

            <div class="guarantee">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                <span>Pagamento 100% Seguro e Encriptado</span>
            </div>
        </div>
    </section>

   <!-- FOOTER -->
   <footer>
        <div class="footer-content">
            <div>
                <h4>Informações da Empresa</h4>
                <p>
                    <strong>Nome da Empresa / Titular:</strong> [SUA EMPRESA / SEU NOME]<br>
                    <strong>NIF:</strong> [000000000]<br>
                    <strong>Morada:</strong> [Rua Exemplo, 123, Código Postal, Localidade - Portugal]<br>
                    <strong>Email:</strong> [contacto@teudominio.pt]<br>
                    <strong>Telefone:</strong> [+351 900 000 000]
                </p>
            </div>
            
            <div>
                <h4>Aviso Legal e Saúde</h4>
                <p>
                    Este produto não é um medicamento e não substitui o aconselhamento, diagnóstico ou tratamento médico profissional. 
                    As informações contidas neste site têm caráter estritamente educativo e informativo.
                </p>
                <p>
                    Consulta sempre o teu médico ou profissional de saúde qualificado antes de realizares qualquer alteração na tua dieta ou rotina de saúde. Os resultados podem variar de pessoa para pessoa.
                </p>
            </div>

            <div>
                <h4>Privacidade e Dados</h4>
                <p>
                    Em conformidade com o RGPD (Regulamento Geral sobre a Proteção de Dados), tratamos os teus dados pessoais com total transparência. 
                    Ao utilizar este site, concordas com a nossa recolha de dados conforme descrito na nossa Política de Privacidade.
                </p>
                <p>
                    Este site não é afiliado ao Taboola, Facebook, Google ou qualquer das suas entidades.
                </p>
            </div>
        </div>

        <div class="footer-links">
            <a href="privacidade.php">Política de Privacidade</a>
            <a href="termos.php">Termos e Condições</a>
            <a href="cookies.php">Política de Cookies</a>
        </div>
        
        <p class="copyright">&copy; 2026 Protocolo Natural. Todos os direitos reservados.</p>
    </footer>

    <script>
        // Setup checkout URL
        const BASE_URL = "https://pay.mundpay.com/0199fdf7-9701-719e-9e32-3e4c59bbe74d";
        const MUNDPAY_URL = BASE_URL + window.location.search;

        // Add event listeners to all checkout buttons
        document.querySelectorAll('.go-to-checkout').forEach(button => {
            button.addEventListener('click', () => {
                window.location.href = MUNDPAY_URL;
            });
        });
    </script>
</body>

</html>