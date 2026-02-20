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
        }

        .imagem-central {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px 0;
            transition: transform 1.5s ease;

        }

        .imagem-central img {
            border-radius: 20px;
            max-width: 100%;
            height: auto;
            transition: transform 0.4s ease;
        }
        
        .imagem-central img:hover {
            transform: scale(1.2);
            cursor: pointer;
        }

        .história {
            color: #000;
            background-color: rgb(187, 187, 249);
            padding: 20px;
            margin-bottom: 40px;
            margin-top: 60px;
        }

        .história h2 {
            text-align: center;
            margin-top: 0;
        }

        .história p {
            text-align: justify;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <header class="full-header">
        Meu Header
    </header>

    <div class="content">
        <h1>Clarinete &#9835;</h1>

        <div class="imagem-central">
            <img src="imgmus/clarinete.jpg" alt="Clarinete">
        </div>

        <div class="história">
    <h2>História do Clarinete</h2>

    <p>
        O clarinete é um instrumento de sopro pertencente à família das madeiras. 
        Ele surgiu no final do século XVII, na Alemanha, a partir de um instrumento 
        mais antigo chamado chalumeau.
    </p>

    <p>
        O aperfeiçoamento do clarinete é atribuído ao construtor Johann Christoph Denner, 
        que adicionou uma chave ao chalumeau, ampliando sua extensão sonora e permitindo 
        novas possibilidades musicais.
    </p>

    <p>
        Durante o período clássico, compositores como Wolfgang Amadeus Mozart 
        deram grande destaque ao instrumento, escrevendo obras importantes que 
        exploravam sua sonoridade suave e expressiva.
    </p>

    <p>
        Além do clarinete tradicional, existe também o clarone (ou clarinete baixo), 
        que possui corpo maior e produz sons mais graves e profundos. Ele é muito 
        utilizado em bandas sinfônicas, orquestras e conjuntos de música contemporânea, 
        enriquecendo a harmonia com sua sonoridade encorpada.
    </p>

    <p>
        Ao longo dos séculos XIX e XX, o clarinete e o clarone passaram por diversas melhorias 
        técnicas, tornando-se mais versáteis e precisos. Hoje, são amplamente utilizados 
        em orquestras, bandas, música de câmara, jazz e música popular.
    </p>
</div>
    </div>

    <div style="display: flex; flex-direction: column; font-size:40px; justify-content: center; align-items: center; border-radius: 20px; height: 100vh; margin: 30vh; background-color: rgb(187, 187, 249);">
        <p style="font-family: 'Story Script', sans-serif; color:#000; margin-bottom:20px;">
            Conheça o som do clarinete
        </p>

        <iframe width="900" height="500"
            style="border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);"
            src="https://www.youtube.com/embed/IL1tulGRUVM"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>


    <?php include 'footer.php'?>
    
</body>
</html>
