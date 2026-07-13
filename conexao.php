<?php







$host = 'sql107.infinityfree.com';
$usuario_db = 'if0_41763495';
$senha_db = 'Olivagit1234';              
$nome_banco = 'if0_41763495_musics';     
$conn = new mysqli($host, $usuario_db, $senha_db, $nome_banco);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>