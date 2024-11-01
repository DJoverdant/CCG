<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'ccg';

    $conexao = new mysqli($host, $user, $password, $db);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }    
?>