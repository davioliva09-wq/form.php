<?php
$host = 'localhost';
$usuario_db = 'root';
$senha_db = '2026';      
$nome_banco = 'musics'; 

$conn = new mysqli($host, $usuario_db, $senha_db, $nome_banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>