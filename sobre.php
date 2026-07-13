<?php  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nós</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Story+Script&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
 <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background: linear-gradient(135deg, rgb(187, 187, 249) 0%,rgb(0, 0, 0) 50%,rgb(187, 187, 249) 100%);
            font-family: 'Montserrat', sans-serif;
            position: relative;
        }

.apresentacao{
background-color:#000;
width:900px;
height: 900px;
margin-top:40px;
margin-bottom:720px;
border-radius:12px;

}

    </style>
    <?php
include 'header.php';?>
</head>
<body>
    <h1 style="font-family: 'Fascinate', cursive;">Quem somos?</h1>


    <section class="apresentacao">
    <div style="padding: 40px; color: #fff; text-align: center;">
        
        <h2 style="font-family: 'Fascinate', cursive; margin-bottom: 20px;">    
            Sobre a Music's
        </h2>

        <p style="margin-bottom: 20px; line-height: 1.6;">
            A <strong>Music's</strong> nasceu com o objetivo de transformar vidas através da música.
            Acreditamos que aprender um instrumento vai muito além de tocar notas — é sobre
            desenvolver disciplina, criatividade e paixão.
        </p>

        <p style="margin-bottom: 20px; line-height: 1.6;">
            Nossa escola oferece aulas de <strong>clarinete, saxofone e violino</strong>,
            com uma metodologia simples, prática e eficiente, pensada principalmente
            para iniciantes e crianças.
        </p>

        <p style="margin-bottom: 20px; line-height: 1.6;">
            Contamos com professores dedicados, prontos para ajudar cada aluno a evoluir
            no seu próprio ritmo, sempre incentivando o amor pela música.
        </p>

        <p style="margin-bottom: 20px; line-height: 1.6;">
            Aqui na Music's, não ensinamos apenas música — formamos músicos com paixão.
        </p>

        <hr style="margin: 30px 0; border: 1px solid rgba(255,255,255,0.2);">

        <p style="font-family: 'Fascinate', cursive; font-size: 18px;">
            "Tocar uma nota errada é insignificante. Tocar sem paixão é imperdoável."
        </p>

    </div>
</section>













<?php include 'footer.php'?>
</body>
</html>