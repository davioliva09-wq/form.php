```html
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Área de Pagamento</title>

<style>

body{
background-color:#000;
margin:0;
font-family:Arial;
}

.area-cursos{
display:flex;
gap:40px;
justify-content:center;
margin-top:150px;
flex-wrap:wrap;
}

.card{
    background-color: rgb(187, 187, 249);
    width:300px;
border-radius:20px;
text-align:center;
padding:20px;
transition:0.3s;
}

.card:hover{
transform:scale(1.05);
}

.card img{
width:100%;
height:200px;
object-fit:cover;
border-radius:15px;
}

.card h2{
margin:10px 0;
}

.preco{
font-size:22px;
font-weight:bold;
margin:10px;
}

.botao{
display:inline-block;
background:#000;
color:white;
padding:10px 20px;
border-radius:10px;
text-decoration:none;
margin-top:10px;
}

.botao:hover{
background:red;
}

</style>

</head>

<body>

<?php include 'header.php'?>

<section class="area-cursos">

<div class="card">
<img src="imgmus/clarinete.jpg">
<h2>Curso de Clarinete</h2>
<p>Aprenda clarinete do zero</p>
<p class="preco">R$100</p>
<a href="merc.php" class="botao">Matricular</a>
</div>

<div class="card">
<img src="imgmus/alto.jpg">
<h2>Curso de Sax Alto</h2>
<p>Curso completo de saxofone</p>
<p class="preco">R$120</p>
<a href="merc.php" class="botao">Matricular</a>
</div>

<div class="card">
<img src="imgmus/Violin.jpg">
<h2>Curso de Violino</h2>
<p>Aprenda violino passo a passo</p>
<p class="preco">R$110</p>
<a href="merc.php" class="botao">Matricular</a>
</div>

</section>

<?php include 'functions.php'?>

</body>
</html>
```
