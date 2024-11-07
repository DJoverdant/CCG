<?php
    
    require 'config.php';
    
    $user = $dados['username'];
    $pass = $dados['senha'];
    
    $sql = "INSERT INTO usuarios(username,senha) VALUES ('$user','$pass')";

    $conexao->query($sql);
    $conexao->close();

?>