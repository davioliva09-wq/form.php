<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saxofone</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Story+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
   

body {
    
    margin: 0;
    font-family: Arial, sans-serif;
    font-size: 17px;
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

        .carousel {
            max-width: 900px;
            margin: 40px auto;
            border-radius: 20px;
            overflow: hidden;
        }

        .carousel img {
    height: 500px;
    object-fit: contain;
    background-color: #000; 
}

.carousel,
.carousel-inner,
.carousel-item,
.carousel img {
    border-radius: 20px;
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
            margin-top: 25px;
        }

        .história p, .história ul {
            color: #000;
        }

        .video-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 20px;
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
        }

        .btn-custom:hover {
            background-color: #fff;
            color: rgb(37, 37, 43);
        }

        @media (max-width: 768px) {
            .carousel img {
                height: 300px;
            }

            .video-section iframe {
                height: 300px;
            }

            .content {
                margin: 0 15px;
                padding-top: 90px;
            }
        }
        .cli{background-color: rgb(187, 187, 249);
            color: #000;
            border: 2px solid #000;
            padding: 15px 40px;
            font-size: 24px;
            font-family: 'Fascinate', cursive;
            border-radius: 50px;
            cursor: pointer;
            margin: 30px auto;
            display: block;}



    </style>
</head>

<body class="dark-theme">
<?php include 'header.php'?>


    

<div class="content">
    <h1>Saxofone &#9835;</h1>

    <!-- CAROUSEL -->
    <div id="carouselSax" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgmus/reto.jpg" class="d-block w-100" alt="Sax Soprano">
            </div>
            <div class="carousel-item">
                <img src="imgmus/alto.jpg" class="d-block w-100" alt="Sax Alto">
            </div>
            <div class="carousel-item">
                <img src="imgmus/Tenor.jpg" class="d-block w-100" alt="Sax Tenor">
            </div>
            <div class="carousel-item">
                <img src="imgmus/bari.jpg" class="d-block w-100" alt="Sax Barítono">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselSax" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselSax" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <div class="história">
        <h2 style="font-family:'Fascinate', cursive;
">História do Saxofone</h2>
        <p>
O saxofone foi inventado em 1846 pelo belga Adolphe Sax, com o objetivo de criar um instrumento que unisse a potência sonora dos metais com a agilidade e flexibilidade das madeiras. Apesar de ser construído em metal, ele pertence à família das madeiras por utilizar palheta simples, semelhante à do clarinete.
</p>

<p>
Inicialmente, o saxofone foi desenvolvido para bandas militares, pois seu som projetava melhor ao ar livre e preenchia espaços que outros instrumentos não alcançavam com tanta clareza. Rapidamente, ele despertou o interesse de compositores eruditos, que passaram a escrever obras específicas para o instrumento.
</p>

<p>
No século XX, o saxofone ganhou enorme destaque com o surgimento do jazz nos Estados Unidos. Tornou-se símbolo de improvisação, expressão individual e liberdade musical. Grandes músicos ajudaram a consolidar o instrumento como um dos mais marcantes da música moderna.
</p>

<p>
Atualmente, o saxofone é amplamente utilizado em diversos estilos musicais, como jazz, música popular, gospel, rock e música erudita, sendo reconhecido mundialmente por sua versatilidade e capacidade expressiva.
</p>    
        <h3>Família do Saxofone</h3>
        <ul>
            <li><strong>Soprano:</strong> agudo e brilhante.</li>
            <li><strong>Alto:</strong> equilibrado e versátil.</li>
            <li><strong>Tenor:</strong> encorpado e expressivo.</li>
            <li><strong>Barítono:</strong> grave e potente.</li>
        </ul>
    </div>

<script>
const switcher = document.querySelector('.troca');

switcher.addEventListener('click', function () {
    document.body.classList.toggle('light-theme');
    document.body.classList.toggle('dark-theme');
});
</script>

</body>
</html>

    <div class="video-section">
        <p>Conheça o som do saxofone</p>
        <iframe width="560" height="315" src="https://youtu.be/tL6oQ3pD8rI?si=m5VdLYs-ywJJqEkn"
title="Careless Whisper Sax" frameborder="0" 
allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
allowfullscreen></iframe>
   </div>
</div>

<button class="btn-custom" onclick="matricula()">Inscrição</button>
<!--<button class="cli" onclick="efeito()"></button>-->
<?php include 'footer.php';
 include 'functions.php';?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
