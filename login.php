<?php
session_start();

$usuarioCorreto = 'Davi';
$senhaCorreta = '123456';
$senha_hash = password_hash($senhaCorreta, PASSWORD_DEFAULT);

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    if ($usuario == $usuarioCorreto && $senha == $senhaCorreta) {
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
        exit;
    } else {
        $erro = 'Usuário ou senha inválidos';
    }
}
?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color:rgb(39, 35, 35);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card-login {
            width: 400px;
            padding: 40px;
            background-color: rgb(187, 187, 249);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .card-login h2 {
            margin-bottom: 20px;
        }

        .card-login input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: none;
            outline: none;
        }

        .card-login button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            background-color: #4c4cff;
            color: white;
            font-weight: bold;
        }

        .card-login button:hover {
            opacity: 0.9;
        }

        .erro {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form method="POST">
    <div class="card-login">
        <h2>Login</h2>
</LLLL>
        <?php if (!empty($erro)): ?>
            <div class="erro"><?= $erro ?></div>
        <?php endif; ?>

        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Entrar</button>
    </div>
</form>

</body>
</html>