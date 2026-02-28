<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clarinete</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Story+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            font-size: 17px;
            color: #fff;
            background-color: #000;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .topo {
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            background-color: rgb(187, 187, 249);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 60px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            z-index: 1000;
            box-sizing: border-box;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo .nota {
            font-size: 32px;
            color: #000;
        }

        .logo h2 {
            font-family: 'Fascinate', cursive;
            margin: 0;
            color: #000;
            font-size: 24px;
        }

        nav {
            display: flex;
            gap: 30px;
        }

        nav a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            transition: all 0.3s ease;
            padding: 8px 12px;
            border-radius: 5px;
        }

        nav a:hover {
            background-color: #000;
            color: rgb(187, 187, 249);
        }

        .content {
            margin: 0 33px;
            flex: 1;
            padding-top: 100px;
        }

        h1 {
            font-family: 'Fascinate', system-ui;
            text-align: center;
            color: rgb(187, 187, 249);
            margin-top: 20px;
            margin-bottom: 30px;
        }

        .imagem-central {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
        }

        .imagem-central img {
            border-radius: 20px;
            max-width: 100%;
            height: auto;
            transition: transform 0.4s ease;
        }
        
        .imagem-central img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .história {
            color: #000;
            background-color: rgb(187, 187, 249);
            padding: 20px;
            margin-bottom: 40px;
            margin-top: 60px;
            border-radius: 10px;
        }

        .história h2 {
            text-align: center;
            margin-top: 0;
            color: #000;
            font-size: 28px;
        }

        .história h3 {
            color: #000;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .história p {
            text-align: justify;
            line-height: 1.6;
            color: #000;
        }
        
        .história ul {
            color: #000;
        }
        
        .história li {
            color: #000;
            margin-bottom: 5px;
        }

        .video-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            height: auto;
            margin: 30px 0 50px 0;
            padding: 40px 20px;
            background-color: rgb(187, 187, 249);
        }

        .video-section p {
            font-family: 'Story Script', sans-serif;
            color: #000;
            margin-bottom: 20px;
            font-size: 36px;
        }

        .video-section iframe {
            width: 100%;
            max-width: 900px;
            height: 500px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .btn-custom {
            background-color: rgb(187, 187, 249);
            color: #000;
            border: 2px solid #000;
            padding: 15px 40px;
            font-size: 24px;
            font-family: 'Fascinate', cursive;
            border-radius: 50px;
            cursor: pointer;
            margin: 30px auto;
            display: block;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #000;
            color: rgb(187, 187, 249);
            border-color: rgb(187, 187, 249);
        }

        .btn-custom:active {
            transform: scale(0.95);
        }

        @media (max-width: 768px) {
            .video-section iframe {
                height: 300px;
            }
            
            .video-section p {
                font-size: 24px;
            }
            
            .content {
                margin: 0 15px;
                padding-top: 90px;
            }

            .topo {
                padding: 0 20px;
                height: 70px;
            }

            .logo h2 {
                font-size: 18px;
            }

            nav {
                gap: 15px;
            }

            nav a {
                font-size: 14px;
            }
        }

        .clarone {
            color: #000;
            background-color: rgb(187, 187, 249);
            padding: 20px;
            margin-bottom: 40px;
            margin-top: 60px;
            border-radius: 10px;
        }

        .clarone h2 {
            text-align: center;
            margin-top: 0;
            color: #000;
            font-size: 28px;
            padding: 20px;
        }

        .clarone p {
            color: #000;
            text-align: justify;
            line-height: 1.6;
        }

        .clarone h3 {
            color: #000;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        .imgcla {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
        }

        .imgcla img {
            border-radius: 20px;
            max-width: 100%;
            height: auto;
            transition: transform 0.4s ease;
        }

        .imgcla img:hover {
            transform: scale(1.1);
            cursor: pointer;
        }

        .video-clarone {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 20px;
            height: auto;
            margin: 30px 0 50px 0;
            padding: 40px 20px;
            margin-top:400px;
            margin-bottom:300px;
            background-color: rgb(187, 187, 249);
        }

        .video-clarone p {
            font-family: 'Story Script', sans-serif;
            color: #000;
            margin-bottom: 20px;
            font-size: 36px;
        }

        .video-clarone iframe {
            width: 100%;
            max-width: 900px;
            height: 500px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

    <div class="content">
        <h1>Clarinete &#9835;</h1>

        <div class="imagem-central">
            <img src="imgmus/clarinete.jpg" alt="Clarinete">
        </div>

        <div class="história">
            <h2>História do Clarinete</h2>

            <p>O clarinete é um instrumento de sopro pertencente à família das madeiras. Ele surgiu no final do século XVII, na Alemanha, a partir de um instrumento mais antigo chamado chalumeau.</p>

            <h3>1. Invenção e Evolução</h3>
            <p>O aperfeiçoamento do clarinete é atribuído ao construtor Johann Christoph Denner, que adicionou uma chave ao chalumeau, ampliando sua extensão sonora e permitindo novas possibilidades musicais.</p>

            <h3>2. Período Clássico</h3>
            <p>Durante o período clássico, compositores como Wolfgang Amadeus Mozart deram grande destaque ao instrumento, escrevendo obras importantes que exploravam sua sonoridade suave e expressiva.</p>

            <h3>3. Família do Clarinete</h3>
            <p>Além do clarinete tradicional, existe também o clarone (ou clarinete baixo), que possui corpo maior e produz sons mais graves e profundos. Ele é muito utilizado em bandas sinfônicas, orquestras e conjuntos de música contemporânea, enriquecendo a harmonia com sua sonoridade encorpada.</p>

            <h3>4. Expansão e Modernidade</h3>
            <p>Ao longo dos séculos XIX e XX, o clarinete e o clarone passaram por diversas melhorias técnicas, tornando-se mais versáteis e precisos. Hoje, são amplamente utilizados em orquestras, bandas, música de câmara, jazz e música popular.</p>
        </div>

        <section class="clarone" id="clarone">
            <h2>Clarone (Clarinete Baixo)</h2>

            <p>
                O clarone, também conhecido como clarinete baixo, é um instrumento de sopro da família das madeiras. Ele possui estrutura semelhante ao clarinete tradicional, porém com tamanho maior e sonoridade mais grave e encorpada.
            </p>

            <p>
                Seu desenvolvimento ocorreu no século XIX, buscando ampliar a extensão sonora da família do clarinete. Com seu tubo mais longo e campana geralmente curvada, o clarone alcança notas profundas que enriquecem a base harmônica de conjuntos musicais.
            </p>

            <h3>Características Sonoras</h3>
            <p>
                O clarone é afinado normalmente em Si♭ e possui uma extensão ampla, capaz de produzir sons graves intensos e também regiões médias expressivas. Seu timbre é aveludado, escuro e marcante.
            </p>

            <h3>Utilização</h3>
            <p>
                É amplamente utilizado em bandas sinfônicas, orquestras, grupos de câmara e também na música contemporânea. No jazz, o clarone ganhou destaque por sua sonoridade diferenciada e profunda.
            </p>

            <h3>Importância Musical</h3>
            <p>
                Dentro da família do clarinete, o clarone cumpre um papel fundamental ao oferecer sustentação harmônica e equilíbrio sonoro, funcionando como uma ponte entre os registros médios e graves da orquestra ou banda.
            </p>
        </section>

        <div class="imgcla">
            <img src="imgmus/clarone.jpg" alt="Clarone">
        </div>

        <div class="video-section">
            <p>Conheça o som do clarinete</p>
            <iframe src="https://www.youtube.com/embed/IL1tulGRUVM"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </div>

        <div class="video-clarone">
            <p>Conheça o som do clarone</p>
            <iframe src="https://www.youtube.com/embed/IL1tulGRUVM"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </div>

        <button class="btn-custom" onclick="matricula()">Inscrição</button>
    </div>

    <?php include 'footer.php' ?>
    <?php include 'functions.php'?>










</body>
</html>