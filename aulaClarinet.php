<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clarinete - Video Aulas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #000;
            color: #fff;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        h1 {
            text-align: center;
            margin: 120px 0 40px 0;
            font-size: 2.5em;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .container-aulas {
            background: linear-gradient(135deg, rgba(187, 187, 249, 0.2) 0%, rgba(187, 187, 249, 0.1) 100%);
            backdrop-filter: blur(10px);
            width: 100%;
            max-width: 1200px;
            min-height: 600px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        #carouselVideos {
            padding: 20px 40px;
        }

        #carouselVideos .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }

        #carouselVideos .col-md-4 {
            padding: 0 15px;
        }

        .video-card {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            height: 100%;
            backdrop-filter: blur(5px);
        }

        .video-card:hover {
            transform: translateY(-10px);
            border-color: #4ecdc4;
            box-shadow: 0 20px 40px rgba(78, 205, 196, 0.2);
        }

        .video-wrapper {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            background: #000;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-info {
            padding: 20px;
        }

        .video-info h3 {
            color: #4ecdc4;
            font-size: 1.3em;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .video-info p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.95em;
            line-height: 1.5;
            margin-bottom: 15px;
        }

        .video-info .duration {
            display: inline-block;
            background: rgba(255, 255, 255, 0.1);
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.85em;
            color: #ff6b6b;
            border: 1px solid rgba(255, 107, 107, 0.3);
        }

        /* Botões de navegação */
        #carouselVideos .carousel-control-prev,
        #carouselVideos .carousel-control-next {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        #carouselVideos .carousel-control-prev:hover,
        #carouselVideos .carousel-control-next:hover {
            background: rgba(78, 205, 196, 0.3);
            opacity: 1;
            transform: translateY(-50%) scale(1.1);
        }

        #carouselVideos .carousel-control-prev {
            left: -20px;
        }

        #carouselVideos .carousel-control-next {
            right: -20px;
        }

        /* Indicadores */
        #carouselVideos .carousel-indicators {
            position: static;
            margin-top: 30px;
        }

        #carouselVideos .carousel-indicators button {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            border: none;
            margin: 0 5px;
        }

        #carouselVideos .carousel-indicators button.active {
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            transform: scale(1.2);
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.8em;
                margin-top: 100px;
            }

            .container-aulas {
                padding: 15px;
            }

            #carouselVideos {
                padding: 10px;
            }

            #carouselVideos .carousel-control-prev,
            #carouselVideos .carousel-control-next {
                display: none;
            }
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<h1>
    🎵 Bem vindo ao curso de Clarinete, <?php echo htmlspecialchars($_SESSION['usuario_cadastrado'] ?? 'Aluno'); ?>!
</h1>

<section class="container-aulas">
    <div id="carouselVideos" class="carousel slide" data-bs-ride="carousel">
        
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselVideos" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselVideos" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselVideos" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 1 - Introdução</h3>
                                <p>Conheça as partes do clarinete e como montar corretamente.</p>
                                <span class="duration">15 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 2 - Postura</h3>
                                <p>Aprenda a posição correta das mãos e postura corporal.</p>
                                <span class="duration">12 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 3 - Embocadura</h3>
                                <p>Técnicas de embocadura para produzir um som limpo.</p>
                                <span class="duration">18 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2 - Vídeos 4, 5 e 6 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_4" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 4 - Primeiras Notas</h3>
                                <p>Comece a produzir suas primeiras notas no clarinete.</p>
                                <span class="duration">20 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_5" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 5 - Escalas</h3>
                                <p>Aprenda as escalas maiores e menores básicas.</p>
                                <span class="duration">25 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_6" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 6 - Respiração</h3>
                                <p>Técnicas de respiração para controle do som.</p>
                                <span class="duration">15 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 3 - Vídeos 7, 8 e 9 -->
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_7" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 7 - Articulação</h3>
                                <p>Aprenda técnicas de articulação e staccato.</p>
                                <span class="duration">22 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_8" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 8 - Dinâmica</h3>
                                <p>Controle de volume e expressão musical.</p>
                                <span class="duration">18 min</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="video-card">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/VIDEO_ID_9" allowfullscreen></iframe>
                            </div>
                            <div class="video-info">
                                <h3>Aula 9 - Repertório</h3>
                                <p>Toque sua primeira música completa.</p>
                                <span class="duration">30 min</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botões de navegação -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselVideos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselVideos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Substitua VIDEO_ID_1, VIDEO_ID_2, etc pelos IDs reais dos vídeos do YouTube -->
</body>
<?php include 'footer.php'?>
</html>