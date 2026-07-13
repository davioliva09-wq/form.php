<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'conexao.php'; 
session_start();

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = trim($_POST['usuario_logado'] ?? '');
    $email = trim($_POST['email'] ?? ''); 
    $senha_pura = $_POST['senha'] ?? '';

    if (empty($usuario) || empty($senha_pura) || empty($email)) {
        $erro = "Preencha todos os campos, incluindo o e-mail.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Por favor, insira um e-mail válido.";
    } elseif (strlen($senha_pura) < 6) {
        $erro = "A senha deve ter no mínimo 6 caracteres.";
    } else {
        $stmt_check = $conn->prepare("SELECT email, nome FROM usuarios WHERE email = ? OR nome = ?");
        $stmt_check->bind_param("ss", $email, $usuario);
        $stmt_check->execute(); 
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $erro = "E-mail ou nome de usuário já cadastrado.";
        } else {
            $hash = password_hash($senha_pura, PASSWORD_DEFAULT);
            
            $stmt_insert = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
            $stmt_insert->bind_param("sss", $usuario, $email, $hash);

            if ($stmt_insert->execute()) {
                $sucesso = "Conta criada com sucesso! <a href='login.php' style='color:#4c4cff;'>Faça login</a>";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Criar Conta</title>
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
            background-color: #1e1e1e;
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        .card {
            width: 100%;
            max-width: 350px;
            padding: 30px;
            background-color: #2c2c2c;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }

        .card h2 {
            color: white;
            margin-bottom: 20px;
        }

        .card input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 8px;
            box-sizing: border-box;
            outline: none;
            font-size: 14px;
        }

        .card button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            background-color: rgb(187, 187, 249);
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .card button:hover {
            background-color: rgb(167, 167, 229);
        }

        .erro {
            color: #ff6666;
            background: rgba(255,0,0,0.1);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .sucesso {
            color: #66ff66;
            background: rgba(0,255,0,0.1);
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .sucesso a {
            color: rgb(187, 187, 249);
            text-decoration: none;
        }

        .sucesso a:hover {
            text-decoration: underline;
        }

        .login-link {
            margin-top: 15px;
            font-size: 12px;
            color: #aaa;
        }

        .login-link a {
            color: rgb(187, 187, 249);
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Responsividade */
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .card {
                padding: 25px 20px;
                max-width: 100%;
            }
            
            .card h2 {
                font-size: 20px;
            }
            
            .card input {
                padding: 8px;
                font-size: 13px;
            }
            
            .card button {
                padding: 8px;
            }
        }

        @media (min-width: 481px) and (max-width: 768px) {
            .card {
                max-width: 380px;
            }
        }

        @media (min-width: 1440px) {
            .card {
                max-width: 400px;
                padding: 35px;
            }
            
            .card h2 {
                font-size: 24px;
            }
            
            .card input {
                padding: 12px;
                font-size: 15px;
            }
            
            .card button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
<form method="POST" style="width: 100%; display: flex; justify-content: center;">
    <div class="card">
        <h2>Criar Conta</h2>
        <?php if($erro): ?> 
            <div class="erro"><?= htmlspecialchars($erro) ?></div> 
        <?php endif; ?>
        <?php if($sucesso): ?> 
            <div class="sucesso"><?= $sucesso ?></div> 
        <?php endif; ?>
        
        <input type="text" name="usuario_logado" placeholder="Usuário" required value="<?= isset($_POST['usuario_logado']) ? htmlspecialchars($_POST['usuario_logado']) : '' ?>">
        <input type="email" name="email" placeholder="E-mail" required value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
        <input type="password" name="senha" id="senha" placeholder="Senha" required>
        
        <button type="submit">Cadastrar</button>
        
        <div class="login-link">
            Já tem uma conta? <a href="login.php">Faça login</a>
        </div>
    </div>
</form>
</body>
</html>