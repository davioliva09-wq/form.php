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
            background-color: #000;
            color: rgb(187, 187, 249);
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
    </style>
</head>

<body>
<?php include 'header.php'?>


    


<div class="content">
    <h1>Saxofone &#9835;</h1>

    <!-- CAROUSEL -->
    <div id="carouselSax" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgmus/soprano.jpeg" class="d-block w-100" alt="Sax Soprano">
            </div>
            <div class="carousel-item">
                <img src="imgmus/Saxalto.jpeg" class="d-block w-100" alt="Sax Alto">
            </div>
            <div class="carousel-item">
                <img src="SaxTenor.webp" class="d-block w-100" alt="Sax Tenor">
            </div>
            <div class="carousel-item">
                <img src="imgmus/SaxBar.jpeg" class="d-block w-100" alt="Sax Barítono">
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
        <h2>História do Saxofone</h2>
        <p>Inventado por Adolphe Sax em 1846, o saxofone combina potência e expressividade. Apesar de ser feito de metal, pertence à família das madeiras por utilizar palheta simples.</p>

        <h3>Família do Saxofone</h3>
        <ul>
            <li><strong>Soprano:</strong> agudo e brilhante.</li>
            <li><strong>Alto:</strong> equilibrado e versátil.</li>
            <li><strong>Tenor:</strong> encorpado e expressivo.</li>
            <li><strong>Barítono:</strong> grave e potente.</li>
        </ul>
    </div>

    <div class="video-section">
        <p>Conheça o som do saxofone</p>
        <iframe src="https://youtu.be/XLH47I9b0a0?si=K0msVP7cLsXFk7MT" allowfullscreen></iframe>
    </div>
</div>

<button class="btn-custom">Inscrição</button>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>