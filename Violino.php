<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violino</title>

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

        .full-header {
            background-color: rgb(187, 187, 249);
            height: 80px;
            text-align: center;
            line-height: 80px;
            width: 100%;
            font-family: 'Fascinate', system-ui;
            font-size: 24px;
            color: #000;
        }

        h1 {
            font-family: 'Fascinate', system-ui;
            text-align: center;
            color: rgb(187, 187, 249);
            margin-top: 20px;
        }

        .content {
            margin: 0 33px;
            flex: 1;
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
        }

        .video-section {
            display: flex;
            flex-direction: column;
            font-size: 40px;
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

        @media (max-width: 768px) {
            .video-section iframe {
                height: 300px;
            }
            
            .video-section p {
                font-size: 24px;
            }
            
            .content {
                margin: 0 15px;
            }
        }

        /* BOTÃO SEM BRILHO */
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
    </style>
</head>

<body>

    <header class="full-header">
        Meu Header
    </header>

    <div class="content">
        <h1>Violino &#9835;</h1>

        <div class="imagem-central">
            <img src="imgmus/Violin.jpg" alt="Violino">
        </div>

        <div class="história">
            <h2>A Evolução do Violino</h2>
            
            <p>O violino, tal como o conhecemos hoje, é um instrumento de cordas friccionadas que teve a sua origem no século XVI, na Itália. Ele evoluiu de instrumentos mais antigos e passou por séculos de aprimoramento por mestres luthieres.</p>

            <h3>1. Origens e Antecessores (Antes do Séc. XVI)</h3>
            <p>Antes do violino moderno, diversos instrumentos de corda influenciaram a sua criação, incluindo:</p>
            <ul>
                <li><strong>Ravanastron:</strong> Instrumento ancestral asiático/africano de uma corda.</li>
                <li><strong>Rebab:</strong> Instrumento árabe que sucedeu o ravanastron.</li>
                <li><strong>Lira Bizantina:</strong> Instrumento medieval em forma de pera.</li>
                <li><strong>Rabeca:</strong> Um dos antecessores mais diretos, com formato similar ao violino.</li>
                <li><strong>Lira da Braccio:</strong> Utilizada no Renascimento italiano, já apresentava características próximas ao violino moderno.</li>
            </ul>

            <h3>2. O Surgimento na Itália (Século XVI)</h3>
            <p>O violino moderno foi desenvolvido no início do século XVI, provavelmente por luthiers de Cremona, Itália. Andrea Amati é frequentemente apontado como um dos criadores do primeiro violino por volta de 1555. Inicialmente, o termo "violino" era menos comum que "rabeca".</p>

            <h3>3. A Era de Ouro: Cremona (Séculos XVII - XVIII)</h3>
            <p>Cremona tornou-se o centro da fabricação de violinos, onde famílias renomadas aprimoraram o instrumento:</p>
            <ul>
                <li><strong>Família Amati:</strong> Estabeleceu o formato inicial do violino barroco.</li>
                <li><strong>Antonio Stradivari (Stradivarius):</strong> Considerado um dos maiores mestres, aperfeiçoou o som e a forma do violino entre 1700-1724.</li>
                <li><strong>Guarneri del Gesú:</strong> Outro mestre luthier cujos instrumentos são reverenciados pela sonoridade única.</li>
            </ul>

            <h3>4. Diferenças: Violino Barroco vs. Moderno</h3>
            <p>Ao longo do século XVIII e XIX, o violino sofreu modificações para atender às demandas de orquestras maiores:</p>
            <ul>
                <li><strong>Violino Antigo (Barroco):</strong> Possuía cordas de tripa, arco convexo, braço mais grosso e reto.</li>
                <li><strong>Violino Moderno:</strong> Inclui um braço inclinado para trás, cordas de maior tensão e um espelho mais longo para agudos mais altos.</li>
            </ul>

            <h3>5. O Violino na Atualidade</h3>
            <p>O violino hoje é um instrumento indispensável na música clássica e popular, famoso pela sua capacidade de expressar emoções intensas, assemelhando-se à voz humana. Mestres como Niccolò Paganini (séculos XVIII/XIX) ajudaram a popularizar o virtuosismo no instrumento.</p>
        </div>

        <div class="video-section">
            <p>Conheça o som do violino</p>

            <iframe src="https://www.youtube.com/embed/IL1tulGRUVM"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
        </div>
    </div>



    <button class="btn-custom">inscrição</button>



    <?php include 'footer.php'; ?>

</body>
</html>