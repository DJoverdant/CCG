<?php
    
    require 'config.php';

    header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"), true);

    $user = $data['username'];
    $pass = $data['senha'];
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
    
    $result = "SELECT senha FROM usuarios WHERE username = ?";
    $run = $conexao->prepare($result);
    $run->bind_param("s", $username);
    $run->execute();
    $run->store_result();
    
    if ($run->num_rows > 0) {
        $run->bind_result($hashed_password);
        $run->fetch();
    
        if (password_verify($pass, $hashed_password)) {
            echo "Login bem-sucedido!";
        } 
        else {
            echo "Senha incorreta.";
        }
    } 
    else {
        echo "Usuário não encontrado.";
    }

    $run->close();
    $conexao->close();
?>
    