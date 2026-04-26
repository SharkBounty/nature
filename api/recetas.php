<?php
    require_once 'reddit_tracker.php';
    $rdt_cid = $_GET['rdt_cid'] ?? null;
    trackRedditPageVisit($rdt_cid);
?>

<!DOCTYPE html>
<html lang="pt-PT">

<head>
    <!-- Taboola Pixel Code -->
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
    <!-- End of Taboola Pixel Code -->
     <!-- Reddit Pixel -->
        <script>
        !function(w,d){if(!w.rdt){var p=w.rdt=function(){p.sendEvent?p.sendEvent.apply(p,arguments):p.callQueue.push(arguments)};p.callQueue=[];var t=d.createElement("script");t.src="https://www.redditstatic.com/ads/pixel.js?pixel_id=a2_iwlpev9kbqi2",t.async=!0;var s=d.getElementsByTagName("script")[0];s.parentNode.insertBefore(t,s)}}(window,document);rdt('init','a2_iwlpev9kbqi2');rdt('track', 'PageVisit');
        </script>
    <!-- DO NOT MODIFY UNLESS TO REPLACE A USER IDENTIFIER -->
    <!-- End Reddit Pixel -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O Guia Mestre do Bicarbonato</title>

    <!-- Vercel Analytics -->
    <script>
        window.va = window.va || function () { (window.va.q = window.va.q || []).push(arguments); };
    </script>
    <script defer src="/_vercel/insights/script.js"></script>
    <meta name="description"
        content="Aprende mais de 50 usos incríveis do bicarbonato de sódio para a tua saúde e casa.">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #27ae60;
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
        }

        h1,
        h2,
        h3 {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.2;
        }

        /* HERO SECTION */
        .hero {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 60px 20px;
            text-align: center;
        }

        .hero h1 {
            color: var(--secondary);
            font-size: 2.2rem;
            margin-bottom: 15px;
            font-weight: 800;
        }

        .hero p {
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto 30px;
            color: #555;
        }

        .hero-img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
            background: #fff;
            padding: 10px;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #aaa;
            border: 2px dashed #ccc;
        }

        .btn {
            display: inline-block;
            background-color: var(--primary);
            color: white;
            padding: 18px 40px;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(39, 174, 96, 0.4);
            transition: transform 0.2s, box-shadow 0.2s;
            text-transform: uppercase;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(39, 174, 96, 0.6);
            background-color: #219150;
        }

        /* PROBLEM / SOLUTION */
        .section {
            padding: 50px 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        .section h2 {
            text-align: center;
            color: var(--dark);
            margin-bottom: 30px;
            font-size: 1.8rem;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .feature {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            text-align: center;
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }

        .feature h3 {
            margin-bottom: 10px;
            color: var(--secondary);
        }

        /* OFFER */
        .offer-box {
            background: #fff;
            border: 2px solid var(--primary);
            border-radius: 15px;
            padding: 40px;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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

        .guarantee {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        /* FOOTER */
        footer {
            background: var(--dark);
            color: #bdc3c7;
            text-align: center;
            padding: 30px 20px;
            font-size: 0.8rem;
            margin-top: 50px;
        }

        footer a {
            color: #ecf0f1;
            margin: 0 10px;
            text-decoration: none;
        }

        /* VSL Specific Styles */
        #main-content {
            display: none;
        }

        #vsl-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            font-family: 'Open Sans', sans-serif;
            border: 1px solid #eee;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            background: #fff;
        }

        .vsl-header {
            margin-bottom: 20px;
            border-bottom: 1px solid #eee;
            padding-bottom: 15px;
        }

        .vsl-header h2 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: #333;
            font-weight: 700;
        }

        .vsl-header p {
            color: #666;
            font-size: 0.95rem;
        }

        .vsl-instruction {
            font-size: 1.1rem;
            margin-bottom: 15px;
            color: #333;
        }

        .cta-continue {
            display: block;
            width: 100%;
            background-color: #0066ff;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            text-transform: uppercase;
        }

        .cta-continue:hover {
            background-color: #0052cc;
        }

        .vsl-footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #666;
        }

        .disclaimer {
            font-size: 0.75rem;
            color: #999;
            margin-top: 15px;
            line-height: 1.4;
        }

        /* QUIZ OVERLAY STYLES */
        #quiz-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px);
        }

        .quiz-card {
            background: #fff;
            padding: 40px;
            border-radius: 16px;
            width: 90%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: slideUp 0.3s ease-out;
            position: relative;
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .quiz-step {
            display: none;
        }

        .quiz-step.active {
            display: block;
            animation: fadeIn 0.4s ease;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .quiz-question {
            font-size: 1.4rem;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 25px;
            font-family: 'Montserrat', sans-serif;
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .quiz-btn {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            padding: 15px;
            border-radius: 8px;
            color: #495057;
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.2s;
            font-weight: 600;
        }

        .quiz-btn:hover {
            background: #e9ecef;
            border-color: #dee2e6;
            transform: translateX(5px);
        }

        .quiz-btn:active {
            background: #dee2e6;
        }

        .progress-bar {
            height: 6px;
            background: #e9ecef;
            border-radius: 3px;
            margin-bottom: 30px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.3s ease;
        }

        .loading-step {
            display: none;
            padding: 20px;
        }

        .spinner {
            width: 50px;
            height: 50px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--primary);
            border-radius: 50%;
            animation: spin 1s linear infinite;
            margin: 0 auto 20px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>

    <!-- QUIZ MODAL -->
    <div id="quiz-overlay">
        <div class="quiz-card">
            <!-- Progress Bar -->
            <div class="progress-bar">
                <div class="progress-fill" id="quiz-progress"></div>
            </div>

            <!-- Question 1 -->
            <div class="quiz-step active" id="step-1">
                <h3 class="quiz-question">Como você descreveria sua rotina diária?</h3>
                <div class="quiz-options">
                    <button class="quiz-btn" onclick="nextQuestion(2)">Calma e tranquila</button>
                    <button class="quiz-btn" onclick="nextQuestion(2)">Moderada</button>
                    <button class="quiz-btn" onclick="nextQuestion(2)">Agitada e estressante</button>
                </div>
            </div>

            <!-- Question 2 -->
            <div class="quiz-step" id="step-2">
                <h3 class="quiz-question">Você costuma sentir falta de energia ao longo do dia?</h3>
                <div class="quiz-options">
                    <button class="quiz-btn" onclick="nextQuestion(3)">Sim, frequentemente</button>
                    <button class="quiz-btn" onclick="nextQuestion(3)">Às vezes</button>
                    <button class="quiz-btn" onclick="nextQuestion(3)">Raramente</button>
                </div>
            </div>

            <!-- Question 3 -->
            <div class="quiz-step" id="step-3">
                <h3 class="quiz-question">Pretende seguir uma rotina mais natural para sua saúde?</h3>
                <div class="quiz-options">
                    <button class="quiz-btn" onclick="finishQuiz()">Sim, com certeza</button>
                    <button class="quiz-btn" onclick="finishQuiz()">Quero começar hoje</button>
                </div>
            </div>

            <!-- Loading -->
            <div class="loading-step" id="step-loading">
                <div class="spinner"></div>
                <h3 style="color: #666; font-size: 1.2rem;">Processando suas respostas...</h3>
                <p style="color: #999; font-size: 0.9rem; margin-top: 10px;">Aguarde um momento.</p>
            </div>
        </div>
    </div>

    <!-- VSL GATE CONTAINER -->
    <div id="vsl-container">
        <div class="vsl-header">
            <h2>Rotina Masculina</h2>
            <p>Conteúdo informativo e educativo.</p>
        </div>

        <p class="vsl-instruction">Vê o vídeo antes de continuar</p>

        <!-- VSL Script Provided by User -->
        <div class="video-wrapper" style="margin-bottom: 20px;">
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

        <button class="cta-continue" onclick="showQuiz()">CONTINUAR</button>

        <div class="vsl-footer">
            <span>Vídeo</span>
            <div>
                <button
                    style="background: #eee; border: none; padding: 5px 10px; border-radius: 3px; margin-right: 5px; cursor: not-allowed; color: #999;">Voltar</button>
                <button class="cta-continue"
                    style="display: inline-block; width: auto; margin: 0; padding: 5px 15px; font-size: 0.9rem;"
                    onclick="showQuiz()">Continuar</button>
            </div>
        </div>

        <p class="disclaimer">
            Conteúdo informativo e educativo.<br>
            Não substitui a orientação profissional. Não realiza promessas de cura nem tratamento.
        </p>
    </div>

    <!-- MAIN CONTENT (HIDDEN INITIALLY - KEPT FOR REFERENCE OR FALLBACK) -->
    <div id="main-content">
        <header class="hero">
            <div class="container" style="max-width: 800px; margin: 0 auto;">
                <h1>Pare de Gastar em Químicos Perigosos!</h1>
                <p>Descobre os 50 usos esquecidos do Bicarbonato de Sódio que te pouparão centenas de euros por ano
                    enquanto proteges a saúde da tua família.</p>

                <!-- Hero Image / Product Mockup -->
                <div class="hero-img">
                    <img src="https://placehold.co/600x350/png?text=Guia+Mestre+Bicarbonato" alt="Guia Digital"
                        style="max-width:100%; height:auto;">
                </div>

                <a href="#comprar" class="btn">Quero o Guia Agora!</a>
            </div>
        </header>

        <!-- CONTENT -->
        <section class="section">
            <h2>Sabias que tens a solução para a maioria dos teus problemas na tua cozinha?</h2>
            <p style="margin-bottom: 20px;">Fizeram-nos acreditar que precisamos de um produto diferente para cada
                thing:
                um para os vidros, outro para a cozinha, outro para a roupa, cremes caros para a pele...</p>
            <p><strong>É mentira!</strong></p>
            <p>Os nossos avós sabiam-no: com ingredientes simples e naturais pode-se fazer quase tudo. E o rei de todos
                eles é o Bicarbonato de Sódio.</p>
        </section>

        <section class="section" style="background-color: #f9f9f9;">
            <h2>O Que Aprenderás Neste Guia Exclusivo</h2>
            <div class="feature-grid">
                <div class="feature">
                    <span class="feature-icon">🌿</span>
                    <h3>Saúde Natural</h3>
                    <p>Remédios caseiros para a azia, picadas, branqueamento dentário seguro e mais.</p>
                </div>
                <div class="feature">
                    <span class="feature-icon">✨</span>
                    <h3>Limpeza Profunda</h3>
                    <p>Como eliminar manchas impossíveis, gordura e maus cheiros sem usar tóxicos.</p>
                </div>
                <div class="feature">
                    <span class="feature-icon">💰</span>
                    <h3>Poupança Massiva</h3>
                    <p>Aprende a fabricar os teus próprios produtos por cêntimos.</p>
                </div>
            </div>
        </section>

        <!-- OFFER SECTION -->
        <section class="section" id="comprar">
            <div class="offer-box">
                <h3>Oferta Especial de Lançamento</h3>
                <p>Obtém o manual completo "Os Milagres do Bicarbonato" em formato digital (PDF).</p>

                <div class="price-tag">
                    <span class="old-price">29.99€</span>
                    9,90€
                </div>

                <ul style="text-align: left; max-width: 300px; margin: 0 auto 30px; list-style: none;">
                    <li style="margin-bottom: 10px;">✅ Acesso Imediato (Download)</li>
                    <li style="margin-bottom: 10px;">✅ 50+ Receitas Testadas</li>
                    <li style="margin-bottom: 10px;">✅ Garantia de 7 Dias</li>
                </ul>

                <a href="https://pay.hotmart.com/V103374224C?off=dafn4nqn" class="btn">DESCARREGAR GUIA COMPLETA</a>

                <div class="guarantee">
                    <p>🔒 Pagamento 100% Seguro e Encriptado</p>
                </div>
            </div>
        </section>

        <footer>
            <p>Este produto não substitui o parecer de um médico profissional. Consulta sempre um especialista para
                tratar assuntos de saúde.</p>
            <div style="margin: 20px 0;">
                <a href="#">Política de Privacidade</a>
                <a href="#">Termos de Uso</a>
                <a href="#">Contacto</a>
            </div>
            <p>&copy; 2025 Protocolo Natural. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script>
        // Updated Mundpay checkout URL
        const BASE_URL = "https://pay.mundpay.com/0199fdf7-9701-719e-9e32-3e4c59bbe74d";
        const MUNDPAY_URL = BASE_URL + window.location.search;

        function showQuiz() {
            document.getElementById('quiz-overlay').style.display = 'flex';
            updateProgress(1);
        }

        function nextQuestion(step) {
            // Hide all steps
            document.querySelectorAll('.quiz-step').forEach(el => {
                el.classList.remove('active');
                el.style.display = 'none'; // Force hide to prevent flash
            });

            // Show new step
            const nextStep = document.getElementById('step-' + step);
            if (nextStep) {
                nextStep.style.display = 'block';
                // Trigger reflow for animation
                void nextStep.offsetWidth;
                nextStep.classList.add('active');
                updateProgress(step);
            }
        }

        function updateProgress(step) {
            const totalSteps = 3;
            const percentage = (step / totalSteps) * 100;
            document.getElementById('quiz-progress').style.width = percentage + '%';
        }

        function finishQuiz() {
            // Hide questions
            document.querySelectorAll('.quiz-step').forEach(el => {
                el.classList.remove('active');
                el.style.display = 'none';
            });

            // Show loading
            const loading = document.getElementById('step-loading');
            loading.style.display = 'block';

            // Wait 2 seconds then redirect
            setTimeout(() => {
                window.location.href = MUNDPAY_URL;
            }, 2500);
        }

        function showContent() {
            // Legacy function kept for fallback, though new flow uses showQuiz()
            document.getElementById('vsl-container').style.display = 'none';
            document.getElementById('main-content').style.display = 'block';
            window.scrollTo(0, 0);
        }
    </script>
</body>

</html>