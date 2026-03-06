<?php
session_start();
$curso = $_GET['curso'];




if($curso == "clarinete"){

$nomeCurso = 'Curso de Clarinete';
$valor = 'R$ 100,00';
}

if($curso == "Sax"){

$nomeCurso = 'Curso de sax';
$valor = 'R$ 100,00';
}

if($curso == "Violino"){

$nomeCurso = 'Violino';
$valor = 'R$ 90,00';
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagamento - Music's</title>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Montserrat',sans-serif;
min-height:100vh;
display:flex;
flex-direction:column;
align-items:center;
background:linear-gradient(135deg,rgb(187,187,249)0%,rgb(0,0,0)50%,rgb(187,187,249)100%);
color:#fff;
}

.container{
width:90%;
max-width:600px;
margin-top:80px;
background:rgba(255,255,255,0.1);
backdrop-filter:blur(10px);
padding:40px;
border-radius:20px;
box-shadow:0 20px 40px rgba(0,0,0,0.4);
}

h1{
text-align:center;
margin-bottom:30px;
}

.resumo{
margin-bottom:30px;
padding:20px;
border-radius:10px;
background:rgba(0,0,0,0.3);
}

.resumo p{
margin:10px 0;
}

.form-group{
margin-bottom:20px;
}

label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

input, select{
width:100%;
padding:12px;
border-radius:10px;
border:none;
outline:none;
}

.pagamento-btn{
width:100%;
padding:15px;
border:none;
border-radius:10px;
background:rgb(187,187,249);
color:#000;
font-weight:bold;
cursor:pointer;
transition:0.3s;
}

.pagamento-btn:hover{
transform:scale(1.05);
}

.voltar{
display:block;
text-align:center;
margin-top:20px;
color:#fff;
text-decoration:none;
}

</style>
</head>

<body>

<div class="container">

<h1>Pagamento</h1>

<div class="resumo">

<label for="curso">Escolha um curso:</label>

<select name="curso" id="curso">
  <option value="">Selecione</option>
  <option value="saxofone">Saxofone</option>
  <option value="clarinete">Clarinete</option>
  <option value="flauta">Flauta</option>
</select>

<form action="processa_pagamento.php" method="POST">

<div class="form-group">
<label>Nome no cartão</label>
<input type="text" name="nome_cartao" required>
</div>

<div class="form-group">
<label>Número do cartão</label>
<input type="text" name="numero_cartao" maxlength="16" required>
</div>

<div class="form-group">
<label>Validade</label>
<input type="text" name="validade" placeholder="MM/AA" required>
</div>

<div class="form-group">
<label>CVV</label>
<input type="text" name="cvv" maxlength="3" required>
</div>

<div class="form-group">
<label>Método de pagamento</label>
<select name="metodo">
<option>Cartão de Crédito</option>
<option>Cartão de Débito</option>
<option>Pix</option>
</select>
</div>

<button class="pagamento-btn">Finalizar pagamento</button>

</form>

<a class="voltar" href="index.php">Voltar</a>

</div>

</body>
</html>



