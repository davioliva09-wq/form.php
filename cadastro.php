<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'conexao.php'; 
session_start();

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pegando os dados e limpando espaços
    $usuario = trim($_POST['usuario_logado'] ?? '');
    $email = trim($_POST['email'] ?? ''); // Corrigido o erro de sintaxe aqui
    $senha_pura = $_POST['senha'] ?? '';

    // Validação: Agora verificando se o email também está vazio
    if (empty($usuario) || empty($senha_pura) || empty($email)) {
        $erro = "Preencha todos os campos, incluindo o e-mail.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Por favor, insira um e-mail válido.";
    } elseif (strlen($senha_pura) < 6) {
        $erro = "A senha deve ter no mínimo 6 caracteres.";
    } else {
        // Verificar se usuário OU email já existem
        $stmt_check = $conn->prepare("SELECT id_usuario FROM usuarios WHERE nome = ? OR email = ?");
        $stmt_check->bind_param("ss", $usuario, $email);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $erro = "Usuário ou E-mail já cadastrados.";
        } else {
            $hash = password_hash($senha_pura, PASSWORD_DEFAULT);
            
            // AJUSTE NA QUERY: Adicionado o campo 'email' e o terceiro '?'
            $stmt_insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt_insert->bind_param("sss", $usuario, $email, $hash);

            if ($stmt_insert->execute()) {
                $sucesso = "Conta criada com sucesso! <a href='login.php' style='color:white;'>Faça login</a>";
            } else {
                $erro = "Falha ao registrar usuário.";
            }
            $stmt_insert->close();
        }
        $stmt_check->close();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
    <style>
        body{ margin:0; height:100vh; display:flex; justify-content:center; align-items:center; background:#1e1e1e; font-family:Arial; }
        .card{ width:350px; padding:30px; background:#2c2c2c; border-radius:15px; text-align:center; }
        .card h2{ color:white; }
        .card input{ width:100%; padding:10px; margin:10px 0; border:none; border-radius:8px; box-sizing: border-box; }
        .card button{ width:100%; padding:10px; border:none; border-radius:8px; background-color: rgb(187, 187, 249); font-weight:bold; cursor:pointer; }
        .erro{ color:red; }
        .sucesso{ color:green; font-weight:bold; }
    </style>
</head>
<body>

<form method="POST">
    <div class="card">
        <h2>Criar Conta</h2>

        <?php if($erro): ?> <p class="erro"><?= $erro ?></p> <?php endif; ?>
        <?php if($sucesso): ?> <p class="sucesso"><?= $sucesso ?></p> <?php endif; ?>

        <input type="text" name="usuario_logado" placeholder="Usuário" required>
        <input type="email" name="email" placeholder="E-mail" required> <input type="password" name="senha" placeholder="Senha" required>

        <button type="submit">Cadastrar</button>
    </div>
</form>

</body>
</html>