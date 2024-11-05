<?php
    
    require 'config.php';
    
    header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"), true);
    
    $user = $data['username'];
    $pass = $data['senha'];
    
    $result = "INSERT INTO usuarios(username,senha) VALUES ('$user','$pass')";

    $conexao->query($result);
    $conexao->close();

?>