<?php
session_start();

session_unset();

session_destroy();

// redireciona para a página inicial
header("Location: index.php");
exit;
?>