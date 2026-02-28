<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
    <?php include 'botao.php';?>
    <style>
        .topo {
           /* position: fixed;
            top: 0;*/
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
            flex-wrap: wrap; 
            cursor: pointer;
        }

        .nota {
            font-size: 32px;
            color: #000;
        }

        .site-name {
            font-family: 'Fascinate', cursive;
            margin: 0;
            color: #000;
            font-size: 24px;
            white-space: nowrap;
        }
        
        .frase {
            font-family: 'Fascinate', cursive;
            font-size: 24px;
            color: #000;
            margin-left: 15px;
            padding-left: 15px;
            border-left: 2px solid rgba(0,0,0,0.3);
            white-space: normal; 
            max-width: none; 
            overflow: visible; 
            text-overflow: clip; 
            line-height: 1.2;
        }
        
        @media (max-width: 1100px) {
            .frase {
                font-size: 12px;
                max-width: 350px; 
                white-space: normal;
            }
        }
        
        @media (max-width: 900px) {
            .logo {
                flex-wrap: wrap; 
            }
            
            .frase {
                margin-left: 42px; 
                border-left: none;
                padding-left: 0;
                max-width: 100%;
            }
        }
        
        @media (max-width: 768px) {
            .topo {
                height: auto;
                min-height: 80px;
                padding: 10px 20px;
            }
            
            .frase {
                display: block;
                margin-left: 32px;
                font-size: 11px;
            }
        }
    </style>
</head>
<body>
    <header class="topo">
        <div class="logo">
            <span class="nota">&#9835;</span>
            <span class="site-name" onclick="voltar()">Music's</span>
            <span class="frase">"Tocar uma nota errada é insignificante. Tocar sem paixão é imperdoável"</span>
        </div>
        <nav>
        </nav>
    </header>
</body>
</html>