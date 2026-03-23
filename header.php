<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
    <?php include 'functions.php';?>
    <style>
* {
    margin-top:0;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
select {
    margin-left: 120px;
    font-family: 'Fascinate', cursive;
            appearance: none;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: #000;
            padding: 15px 40px 15px 20px;
            border-radius: 50px;
            border: 1px solid rgb(0, 0, 0);
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

        select {
                width: 100%;
                max-width: 300px;
            }
body{
    margin: 0;
    padding: 0;
}

.topo {
    width: 100%;
    height: 80px;
    background-color: rgb(187, 187, 249);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 60px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.4);
    z-index: 1000;
}

.logo {
    display: flex;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
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
    margin-right: 10px;
}

.logo a {
    font-family: 'Fascinate', cursive;
    position: relative;
    padding: 6px 12px;
    text-decoration: none;
    color: #000;
    font-weight: bold;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.logo a:not(:last-child)::after {
    content: "|";
    margin-left: 12px;
    color: #000;
}

.logo a:hover {
    background: rgba(0, 0, 0, 0.1);
    transform: scale(1.05);
}

.frase {
    font-family: 'Fascinate', cursive;
    font-size: 20px;
    color: #000;
    margin-left: 15px;
    padding-left: 15px;
    border-left: 2px solid rgba(0,0,0,0.3);
    line-height: 1.2;
}

@media (max-width: 1100px) {
    .frase {
        font-size: 12px;
        max-width: 350px;
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
            <a href="index.php">inicio</a>
            <a href="sobre.php">sobre</a>
            <a href="cursos.php">cursos</a>
            <a href="inicio">professores</a>
        </div>
        <select onchange="location = this.value; ">
    <option value="" disabled selected>Conheça os instrumentos</option>
        <option value="Clarinete.php">Clarinete</option>
        <option value="Sax.php">Saxofone</option>
        <option value="Violino.php">Violino</option>
    </select>
        <nav></nav>
    </header>
</body>
</html>