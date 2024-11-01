<?php
    
    require 'config.php';

    $user = $_POST['username'];
    $pass = $_POST['senha'];
    
    $result = "INSERT INTO usuarios(username,senha) VALUES ('$user','$pass')";

    $conexao->query($result);
    $conexao->close();

?>