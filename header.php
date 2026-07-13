    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music's Header</title>
        <link rel="preconnect" href="https://googleapis.com">
        <link rel="preconnect" href="https://gstatic.com" crossorigin>
        <link href="https://googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
        
        <?php include 'functions.php';?>

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: Arial, sans-serif;
            }

            .topo {
                width: 100%;
                min-height: 80px;
                background-color: rgb(187, 187, 249);
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 5%;
                box-shadow: 0 4px 15px rgba(0,0,0,0.4);
                position: relative;
                z-index: 1000;
                flex-wrap: wrap;
                gap: 20px;
            }

            .logo-container {
                display: flex;
                align-items: center;
                gap: 20px;
                flex-wrap: wrap;
            }

            .brand {
                display: flex;
                align-items: center;
                gap: 10px;
                cursor: pointer;
            }

            .nota {
                font-size: 32px;
                color: #000;
            }

            .site-name {
                font-family: 'Fascinate', cursive;
                color: #000;
                font-size: 26px;
                white-space: nowrap;
            }

            /* Menu de Links com Separadores */
            .nav-links {
                display: flex;
                align-items: center;
            }

            .nav-links a {
                font-family: 'Fascinate', cursive;
                padding: 8px 12px;
                text-decoration: none;
                color: #000;
                font-weight: bold;
                transition: all 0.2s ease;
                font-size: 14px;
                display: flex;
                align-items: center;
            }

            /* Estilização dos Tracinhos (|) 
            .nav-links a:not(:last-child)::after {
                content: "|";
                margin-left: 15px;  Espaço entre o texto e o traço 
                color: #000;
                opacity: 0.4;
                pointer-events: none; /* O traço não é clicável 
            }

            .nav-links a:hover {
                background: rgba(255, 255, 255, 0.2);
                border-radius: 4px;
            }

            Estilo do Select */
            select {
                font-family: 'Fascinate', cursive;
                appearance: none;
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                color: #000;
                padding: 12px 40px 12px 20px;
                border-radius: 50px;
                border: 1px solid rgb(0, 0, 0);
                cursor: pointer;
                font-size: 0.9em;
                outline: none;
                width: 100%;
                max-width: 250px;
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://w3.org' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='black' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
                background-repeat: no-repeat;
                background-position: right 15px center;
            }

            select option {
                background: #fff;
                color: #000;
            }

            /* Responsividade */
            @media (max-width: 850px) {
                .topo {
                    flex-direction: column;
                    padding: 20px;
                    text-align: center;
                }

                .logo-container {
                    flex-direction: column;
                    width: 100%;
                }

                .nav-links {
                    justify-content: center;
                    flex-wrap: wrap;
                }

                /* Remove os traços no mobile para não quebrar o layout */
                .nav-links a:not(:last-child)::after {
                    display: none;
                }
                
                select {
                    max-width: 100%;
                }
            }
        </style>
    </head>
    <body>

        <header class="topo">
            <div class="logo-container">
                <div class="brand" onclick="voltar()">
                    <span class="nota">♫</span>
                    <span class="site-name">Music's</span>
                </div>

                <nav class="nav-links">
                    <a href="index.php">inicio</a>
                    <a href="sobre.php">sobre</a>
                    <a href="cursos.php">cursos</a>
                    <a href="professores.php">professores</a>
                </nav>
            </div>

            <select onchange="if(this.value) location = this.value;">
                <option value="" disabled selected>Conheça os instrumentos</option>
                <option value="Clarinete.php">Clarinete</option>
                <option value="Sax.php">Saxofone</option>
                <option value="Violino.php">Violino</option>
            </select>
        </header>

        <script>
            function voltar() {
                window.location.href = 'index.php';
            }
        </script>

    </body>
    </html>
