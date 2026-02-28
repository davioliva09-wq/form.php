<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>área de pagamento/head></title>
    <style>
body{



    background-color:#000;
}
.area-cursos{
    display:flex;
    gap:40px;
    justify-content:center;
    margin-top:200px;
}

img {
    width: 300px;
    height: 300px;
    background: white;
    border-radius: 20px;
    transition: transform 0.3s ease; 
}

img:hover {
    transform: scale(1.1); 
}

    </style>
</head>
<body>
<?php include 'header.php'?>
 
<section class="area-cursos">

    <img src="imgmus/clarinete.jpg" alt="Clarinete" onclick="matricula()">
    <img src="imgmus/clarinete.jpg" alt="Clarinete">
    <img src="imgmus/clarinete.jpg" alt="Clarinete">
    <img src="imgmus/clarinete.jpg" alt="Clarinete">

</section>












    <?php include 'botao.php'?>
</body>
</html>






































<?php




