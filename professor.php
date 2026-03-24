<?php
session_start();
require_once 'conexao.php';

$erro = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    $sql = "SELECT * FROM professores WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $professor = $resultado->fetch_assoc();

    if ($professor && $senha === $professor['senha']) {

        $_SESSION['professor_id'] = $professor['id'];
        $_SESSION['professor_nome'] = $professor['nome'];

        header("Location: index.php");
        exit;

    } else {
        $erro = "Email ou senha incorretos";
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
            background: linear-gradient(135deg, rgb(187,187,249), #000);
            font-family: Arial, Helvetica, sans-serif;
        }

        .card-login {
            width: 100%;
            max-width: 400px;
            padding: 40px;
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }

        .card-login h2 {
            margin-bottom: 20px;
            color: #fff;
        }

        .card-login input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: none;
            outline: none;
            background: rgba(255,255,255,0.2);
            color: #fff;
        }

        .card-login input::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .card-login button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            background-color: rgb(187,187,249);
            color: #000;
            font-weight: bold;
            transition: 0.3s;
        }

        .card-login button:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .erro {
            color: #ff6b6b;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form method="POST">
        <div class="card-login">
            <h2>Login do Professor</h2>

            <?php if (!empty($erro)): ?>
                <div class="erro"><?php echo $erro; ?></div>
            <?php endif; ?>

            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>