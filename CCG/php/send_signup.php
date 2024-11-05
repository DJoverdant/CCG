<?php
    
    require 'config.php';
    
    $user = $dados['username'];
    $pass = $dados['senha'];
    $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
    
    $result = "INSERT INTO usuarios(username,senha) VALUES ('$user','$hashed_pass')";

    $conexao->query($result);
    $conexao->close();

?>