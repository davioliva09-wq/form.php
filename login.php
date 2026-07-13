<?php

require_once 'conexao.php';
session_start();

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $usuario = trim($_POST['usuario_logado'] ?? '');
    $senha_digitada = trim($_POST['senha'] ?? '');

    if (empty($usuario) || empty($senha_digitada)) {
        $erro = "Preencha todos os campos.";
    } else {
        $stmt = $conn->prepare("
            SELECT nome, senha 
            FROM usuarios 
            WHERE LOWER(nome) = LOWER(?) 
               OR LOWER(email) = LOWER(?)
        ");

        if (!$stmt) {
            die("Erro no prepare: " . $conn->error);
        }

        $stmt->bind_param("ss", $usuario, $usuario);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows === 1) {
            $dados = $resultado->fetch_assoc();

            if (password_verify($senha_digitada, $dados['senha'])) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario_logado'] = $dados['nome'];
                header('Location: index.php');
                exit;
            } else {
                $erro = "Senha incorreta.";
            }
        } else {
            $erro = "Usuário ou e-mail não encontrado.";
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
<title>Login</title>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #272323;
    font-family: Arial, sans-serif;
    padding: 20px;
}

.card-login {
    width: 100%;
    max-width: 350px;
    padding: 40px;
    background-color: #bbbbf9;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}

.card-login h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #000;
}

.card-login input {
    width: 100%;
    padding: 12px;
    margin: 10px 0;
    border-radius: 10px;
    border: none;
    outline: none;
    font-size: 14px;
}

.btn-mostrar {
    background: #4c4cff;
    color: white;
    border: none;
    padding: 8px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 12px;
    width: fit-content;
    align-self: flex-end;
    transition: all 0.2s ease;
}

.btn-mostrar:hover {
    background: #3a3acc;
}

button[type="submit"] {
    width: 100%;
    padding: 12px;
    border-radius: 10px;
    border: none;
    cursor: pointer;
    background-color: #4c4cff;
    color: white;
    font-weight: bold;
    margin-top: 10px;
    transition: all 0.2s ease;
}

button[type="submit"]:hover {
    background-color: #3a3acc;
}

.erro {
    color: #d00;
    background: #ffcccc;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    text-align: center;
    font-size: 14px;
}

/* Responsividade */
@media (max-width: 480px) {
    body {
        padding: 15px;
    }
    
    .card-login {
        padding: 30px 25px;
        max-width: 100%;
    }
    
    .card-login h2 {
        font-size: 22px;
    }
    
    .card-login input {
        padding: 10px;
        font-size: 13px;
    }
    
    button[type="submit"] {
        padding: 10px;
    }
}

@media (min-width: 481px) and (max-width: 768px) {
    .card-login {
        max-width: 380px;
    }
}

@media (min-width: 1440px) {
    .card-login {
        max-width: 400px;
        padding: 45px;
    }
    
    .card-login h2 {
        font-size: 28px;
    }
    
    .card-login input {
        padding: 14px;
        font-size: 16px;
    }
}
</style>
</head>
<body>
<form method="POST" style="width: 100%; display: flex; justify-content: center;">
    <div class="card-login">
        <h2>Login</h2>
        <?php if (!empty($erro)): ?>
            <div class="erro"><?= htmlspecialchars($erro) ?></div>
        <?php endif; ?>
        <input type="text" name="usuario_logado" placeholder="Usuário ou Email" required>
        <input type="password" name="senha" id="senha" placeholder="Senha" required>
        <button type="button" id="btnToggle" class="btn-mostrar">Mostrar Senha</button>
        <button type="submit">Entrar</button>
    </div>
</form>
<script>
function toggleSenha() {
    const input = document.getElementById('senha');
    const botao = document.getElementById('btnToggle');
    if (input.type === 'password') {
        input.type = 'text';
        botao.innerText = 'Esconder';
    } else {
        input.type = 'password';
        botao.innerText = 'Mostrar';
    }
}
document.getElementById('btnToggle').addEventListener('click', toggleSenha);
</script>
</body>
</html>