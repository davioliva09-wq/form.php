<?php
session_start();
$cursos = [
    [
        "curso" => "Clarinete",
        "preco" => 150.00,
    ],
    [
        "curso" => "Sax",
        "preco" => 130.00,
        
    ],
    [
        "curso" => "Violino",
        "preco" => 140.00,
    ],
    
];



foreach ($cursos as $curso) {
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music's</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Story+Script&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

        .header {
            width: 100%;
            padding: 20px 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            font-family: 'Fascinate', cursive;
            font-size: 2.5em;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 2px;
        }

        .nav-links {
            display: flex;
            gap: 30px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .text {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding: 20px 40px;
            margin-top: 20px;
        }

        select {
            appearance: none;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: #fff;
            padding: 15px 40px 15px 20px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            cursor: pointer;
            font-size: 1em;
            font-weight: 500;
            outline: none;
            min-width: 250px;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 20px center;
        }

        select option {
            background: #16213e;
            color: #fff;
            padding: 10px;
        }

        select:hover {
            background: rgba(255, 255, 255, 0.25);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding: 20px;
        }

        .hero-section {
            text-align: center;
            margin: 40px 0 20px;
        }

        .hero-section h2 {
            font-family: 'Story Script', cursive;
            font-size: 3.5em;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 10px;
        }

        .hero-section p {
            color: rgba(255,255,255,0.8);
            font-size: 1.1em;
            max-width: 600px;
            margin: 0 auto;
        }

        .area-music {
            width: 800px;
            max-width: 90%;
            height: 400px;
            margin: 30px 0 50px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
            position: relative;
            transition: transform 0.3s ease;
        }

        .area-music:hover {
            transform: scale(1.02);
        }

        .area-music img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
            gap:20px;
        }

        .area-music:hover img {
            transform: scale(1.1);
        }

        .music-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .area-music:hover .music-overlay {
            transform: translateY(0);
        }

        .music-overlay h3 {
            font-size: 1.5em;
            margin-bottom: 5px;
        }

        .music-overlay p {
            opacity: 0.9;
        }

        .features {
            display: flex;
            gap: 30px;
            margin: 40px 0;
            flex-wrap: wrap;
            justify-content: center;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 20px;
            width: 250px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .feature-card i {
            font-size: 3em;
            background: linear-gradient(45deg, #ff6b6b, #4ecdc4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            color: #fff;
            margin-bottom: 10px;
        }

        .feature-card p {
            color: rgba(255,255,255,0.7);
            font-size: 0.9em;
        }

        .footer {
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            padding: 30px 40px;
            margin-top: auto;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .footer-info p {
            color: rgba(255,255,255,0.7);
            font-size: 0.9em;
        }

        .social-links {
            display: flex;
            gap: 20px;
        }

        .social-links a {
            color: #fff;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #4ecdc4;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero-section h2 {
                font-size: 2.5em;
            }
            
            .feature-card {
                width: 100%;
                max-width: 300px;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
            
            .text {
                justify-content: center;
                padding-right: 20px;
            }
            
            select {
                width: 100%;
                max-width: 300px;
            }
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }



        .meusCursos {
    min-height: 1000px; 
    width: 100%;
}

.preços {
    display: flex;
    justify-content: center;
    gap: 40px;
    flex-wrap: wrap;
    padding: 40px 20px;
    margin: 40px 0;
    width: 100%;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
}

.preços img {
    width: 300px;
    height: 300px;
    background: white;
    border-radius: 20px;
    object-fit: cover;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 3px solid rgba(255,255,255,0.2);
}

.preços img:hover {
    transform: scale(1.05);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    border-color: rgba(255,255,255,0.4);
}

@media (max-width: 768px) {
    .preços {
        gap: 30px;
        padding: 20px;
    }
    
    .preços img {
        width: 250px;
        height: 250px;
    }
}



.area-botoes{
    display: flex;
    gap: 20px;
    justify-content: center;
    margin-top: 60px;
}

.btn{
    padding: 12px 30px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    transition: 0.3s ease;
    display: inline-block;
}

.entrar{
    background-color: rgb(187, 187, 249);
    color: #000;
}

.matricula{
    background-color: rgb(187, 187, 249);
    color: #000;
}

.btn:hover{
    transform: scale(1.05);
    opacity: 0.9;
}


.instrumentimg:hover{
    cursor:pointer;
}




.sair{
    margin-top:10px;
    border-radius:6px;
    width:49px; 59px;
    background:rgb(187, 187, 249);
}
.sair:hover{
cursor: pointer;

transform: scale(1.05); 
    transition: transform 0.2s ease; 
}
    </style>
</head>
<body>

<?php include 'header.php';?>

<main class="main-content">
    <div class="hero-section floating">
        <h2>Descubra a Música</h2>
        <p>Explore o mundo dos instrumentos musicais e encontre sua paixão</p>
    </div>
    <div class="area-botoes">
    <a href="login.php" class="btn entrar">Entrar</a>
    <a href="cadastro.php" class="btn matricula">Matricule-se</a>
</div>

<section class="text">
    <select onchange="location = this.value;">
    <option value="" disabled selected>Conheça os instrumentos</option>
        <option value="Clarinete.php">Clarinete</option>
        <option value="pag.php?curso=sax">Saxofone</option>
        <option value="pag.php?curso=violino">Violino</option>
    </select>
</section>
<h1 style="  font-family: 'Fascinate', cursive;
            font-size: 24px;
            color: #000;
            margin-left: 15px;
            padding-left: 15px;
            white-space: normal; 
            max-width: none; 
            overflow: visible; 
            text-overflow: clip; 
            line-height: 1.2;"> Seja bem vindo, <?php echo htmlspecialchars($_SESSION['usuario_logado'] ?? 'Aluno'); ?></h1>
<select onchange="location = this.value;">
    
    <option value="Clarinete.php">Clarinete</option>
    <option value="Sax.php">Saxofone</option>
    <option value="Violin.php">Violino</option>
</select>
<button onclick="window.location.href='logout.php'" class="sair">Sair</button>

    <section class="area-music">
    <img src="imgmus/parti.jpeg" alt="Escola de Música">
        <div class="music-overlay">
            <h3>Escola de Música Music's</h3>
            <p>Aprenda com os melhores professores</p>
        </div>
    </section>

    <section class="features">
        <div class="feature-card">
            <i class="fas fa-music"></i>
            <h3>Ensino especializade em crianças</h3>
        </div>
        <div class="feature-card">
            <i class="fas fa-chalkboard-teacher"></i>
            <h3>Professores Qualificados</h3>
            <p>Equipe com anos de experiência musical</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-calendar-alt"></i>
            <h3>Aulas online com a didática perfeita</h3>
        </div>
    </section>
</main>
<div class="hero-section floating">
        <h2>Preços que cabem no seu bolso</h2>
        <p>Explore o mundo dos instrumentos musicais e encontre sua paixão</p>
    </div>

    <section class="preços">

<figure style="color:#fff;">
        <img src="imgmus/clarinete.jpg" alt="Clarinete" onclick="veri('Clarinete')" class="instrumentimg">
    
        <figcaption style="margin-top:44px;"><?php echo $cursos[0]['curso']; ?></figcaption>
<figcaption><strong>R$ <?php echo number_format($cursos[0]['preco'], 2, ',', '.'); ?></strong></figcaption>
</figure>
<figure style="color:#fff;">

<img src="imgmus/alto.jpg" alt="Sax Alto" onclick="veri('Sax')" class="instrumentimg">

<figcaption style="margin-top:44px;"><?php echo $cursos[1]['curso']; ?></figcaption>
<figcaption><strong>R$ <?php echo number_format($cursos[1]['preco'], 2, ',', '.'); ?></strong></figcaption>
</figure>

<figure style="color:#fff;">
   <!-- <a href="pag.php?curso=violino">-->
        <img src="imgmus/Violin.jpg" alt="Violino" onclick="veri('Violino')"class="instrumentimg">
    </a>
    <figcaption style="margin-top:44px;"><?php echo $cursos[2]['curso']; ?></figcaption>
<figcaption><strong>R$ <?php echo number_format($cursos[2]['preco'], 2, ',', '.'); ?></strong></figcaption>
</figure>


</section>




<section style="min-height: 600px;
width: 100%;"></section>
<?php include 'footer.php';
?>
<script src="functions.php"></script>
</body>
</html>







