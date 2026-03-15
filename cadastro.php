<?php
session_start();

$erro = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $usuario = $_POST['usuario_logado'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if(!empty($usuario) && !empty($senha)){

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $_SESSION['usuario_logado'] = $usuario;
        $_SESSION['senha_cadastrada'] = $senhaHash;

        header('Location: index.php');
        exit;

    } else {
        $erro = "Preencha todos os campos.";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Criar Conta</title>
<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#1e1e1e;
    font-family:Arial;
}
.card{
    width:350px;
    padding:30px;
    background:#2c2c2c;
    border-radius:15px;
    text-align:center;
}
.card h2{ color:white; }
.card input{
    width:100%;
    padding:10px;
    margin:10px 0;
    border:none;
    border-radius:8px;
}
.card button{
    width:100%;
    padding:10px;
    border:none;
    border-radius:8px;
   background-color:  rgb(187, 187, 249);
    font-weight:bold;
    cursor:pointer;
}
.erro{ color:red; }
</style>
</head>
<body>

<form method="POST">
<div class="card">
<h2>Criar Conta</h2>

<?php if(!empty($erro)): ?>
<p class="erro"><?= $erro ?></p>
<?php endif; ?>

<input type="text" name="usuario_logado" placeholder="Usuário" required>
<input type="password" name="senha" placeholder="Senha" required>

<button type="submit">Cadastrar</button>
</div>
</form>

</body>
</html>