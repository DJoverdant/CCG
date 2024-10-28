<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'CCG';

    $conexao = new mysqli($host, $user, $password, $db);

    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conexao->connect_error);
    }
    echo "Conectado com sucesso!";
?>
<!-- Não Finalizado obviamente -->