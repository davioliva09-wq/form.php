<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrumentos</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
            padding-top: 100px;
            text-align: center;
            margin-bottom:350px;
        }

        h1 {
            font-family: 'Fascinate', cursive;
            color: rgb(187,187,249);
            margin-bottom: 50px;
        }

        .instrumentos {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .card {
            text-decoration: none;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: 0.3s;
        }

        .card img {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 20px;
            background: #fff;
            padding: 10px;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(0,0,0,0.5);
        }

        .card span {
            margin-top: 12px;
            font-weight: bold;
            font-size: 18px;
        }

        .card:hover img {
            transform: scale(1.1);
            box-shadow: 0 20px 40px rgba(0,0,0,0.7);
        }

        .card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<div class="content">
    <h1>&#9835; Escolha seu instrumento</h1>

    <div class="instrumentos">

        <a href="ClarineteAula.php" class="card">
            <img src="imgmus/clarinete.jpg" onclick="veri('Clarinete')">
            <span>Clarinete</span>
        </a>

        <a href="SaxAula.php" class="card">
            <img src="imgmus/Saxalto.jpeg">
            <span>Saxofone</span>
        </a>

        <a href="SaxAula.php" class="card">
            <img src="imgmus/Violin.jpg">
            <span>Violino</span>
        </a>

        <a href="SaxAula.php" class="card">
            <img src="imgmus/flautatr.jpg">
            <span>Flauta</span>
        </a>

    </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'functions.php'; ?>

</body>
</html>