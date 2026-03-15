<?php
session_start();

$curso = $_GET['curso'] ?? '';




  $cursosDisponiveis = [
    'clarinete' => 99.90,
    'sax' => 9.90,
    'violino' => 90.90];



switch(strtolower($curso)){
    case 'clarinete':
        $nomeCurso = 'Clarinete';
        $valor = 'R$ 90,90';
        break;
    case 'sax':
        $nomeCurso = 'Saxofone';
        $valor = 'R$ 9,90';
        break;
    case 'violino':
        $nomeCurso = 'Violino';
        $valor = 'R$ 90,00';
        break;
    default:
        $nomeCurso = '';
        $valor = '';
        break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pagamento - Music's</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Story+Script&family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
*{margin:0; padding:0; box-sizing:border-box;}
body{
    font-family:'Montserrat',sans-serif;
    min-height:100vh;
    display:flex;
    flex-direction:column;
    align-items:center;
    background:linear-gradient(135deg,rgb(187,187,249)0%,rgb(0,0,0)50%,rgb(187,187,249)100%);
    color:#fff;
}
.header{
    width:100%;
    padding:20px 40px;
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(10px);
    border-bottom:1px solid rgba(255,255,255,0.1);
    display:flex;
    justify-content:space-between;
    align-items:center;
}
.logo h1{
    font-family:'Fascinate',cursive;
    font-size:2.5em;
    background:linear-gradient(45deg,#ff6b6b,#4ecdc4);
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
    letter-spacing:2px;
}
.container{
    width:90%;
    max-width:600px;
    margin:80px auto;
    background:rgba(255,255,255,0.1);
    backdrop-filter:blur(10px);
    padding:40px;
    border-radius:20px;
    box-shadow:0 20px 40px rgba(0,0,0,0.4);
}
h1{text-align:center;margin-bottom:30px;}

.form-group{margin-bottom:20px;}

label{display:block;margin-bottom:5px;font-weight:bold;}

input, select{
    width:100%;
    padding:12px;
    border-radius:50px;
    border:1px solid rgba(255,255,255,0.2);
    outline:none;
    background:rgba(255,255,255,0.15);
    color:#fff;
    backdrop-filter:blur(10px);
    font-weight:500;
}
.pagamento-btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:50px;
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
.preco {
    margin: 20px 0;
    padding: 15px;
    text-align: center;
    font-size: 1.3em;
    font-weight: bold;
    background: rgba(0,0,0,0.3);
    border-radius: 15px;
}
</style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
<h1>Pagamento</h1>

<form action="processa_pagamento.php" method="POST">

<div class="form-group">
<label>Escolha o curso</label>
<select name="curso" id="curso" required>
    <option value="" disabled <?php echo $curso==''?'selected':''; ?>>Selecione o curso</option>
    <option value="clarinete" <?php echo strtolower($curso)=='clarinete'?'selected':''; ?>>Clarinete</option>
    <option value="sax" <?php echo strtolower($curso)=='sax'?'selected':''; ?>>Saxofone</option>
    <option value="violino" <?php echo strtolower($curso)=='violino'?'selected':''; ?>>Violino</option>
</select>
</div>

<div class="preco" id="preco">
<?php echo $valor; ?>
</div>



<div class="form-group">
<label>Método de pagamento</label>
<select name="metodo" required>
    <option>Cartão de Crédito</option>
    <option>Cartão de Débito</option>
    <option>Pix</option>
</select>
</div>

<button type="submit" class="pagamento-btn">Finalizar pagamento</button>
</form>

<a class="voltar" href="index.php">Voltar</a>
</div>

<?php include 'footer.php'; ?>

<script>
const cursoSelect = document.getElementById('curso');
const precoDiv = document.getElementById('preco');

const precos = {
    clarinete: 'R$ 99,90',
    sax: 'R$ 99,90',
    violino: 'R$ 90,00'
};

cursoSelect.addEventListener('change', () => {
    const selecionado = cursoSelect.value;
    precoDiv.textContent = precos[selecionado] || '';
});
</script>

</body>
</html>