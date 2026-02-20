<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>formulario</title>
    <style>

body{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    height: 100vh;
    background: linear-gradient(90deg, black, gray);
    display: flex;
    justify-content: center; 
    align-items: center;        
}

h1 {
    font-family: 'Fascinate', system-ui;
    text-align: center;
    color:rgba(71, 17, 17, 0.69);
    box-shadow: pink;
}



.card-form{
    background-color:rgba(246, 246, 246, 0.09);
    width: 500px;
    height: 500px;
    border-radius:20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.card-form input{
    margin: 10px 0;
    padding: 8px;
    border-radius: 10px;;
    width: 80%;
}


button{
    border-radius:5px;
    transition: 0.5s;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    width:100px;


}

button:hover{

    background-color:#808080;
    transform: scale(1.1);
    cursor:pointer;

}

select{

    margin: 10px 0;
    padding: 8px;
    border-radius: 10px;;
    width: 80%;



}

    </style>
</head>
<body>


<form method="POST" action="" target="_blank">



<h1 style="color:#000;">inscrição da música &#9835;</h1>

<div class="card-form"> 
    <input type="text" name="nome" placeholder="Seu nome" required>
    <br>
    <input type="email" name="email" placeholder="Seu email" required> 
    <br>

    <select name="instrumento" required >
        <option value="Escolher">Escolher</option>
        <option value="Clarinete">Clarinete</option>
        <option value="Violino">Violino</option>
        <option value="Flauta">Flauta</option>
        <option value="Saxofone">Saxofone</option>
        <option value="Tuba">Tuba</option>
        


    </select>
    <button type="submit" name="enviar">Enviar</button>
</form>
</div>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>  
</body>
</html>



























<?php

$erros = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $instrumento = $_POST['instrumento'] ?? '';

    if(empty($nome)){
        $erros[] = 'Nome é obrigatório';
    }

    if(empty($email)){
        $erros[] = 'Email é obrigatório';
    } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $erros[] = 'Email inválido';
    }

    if(empty($erros)){

        if($instrumento == "Clarinete"){
            header('Location: Clarinete.php');
            exit;
        }

        if($instrumento == "Violino"){
            header('Location: Violino.php');
            exit;
        }

        if($instrumento == "Flauta"){
            header('Location: Flauta.php');
            exit;
        }

        if($instrumento == "Saxofone"){
            header('Location: Saxofone.php');
            exit;
        }

        if($instrumento == "Tuba"){
            header('Location: Tuba.php');
            exit;
        }
        if($instrumento =="Escolher"){

            return 'escolha o instrumento';
        }

    } else {

        foreach ($erros as $erro) {
            echo "<p style='color:red'>$erro</p>";
        }

    }

}
?>
