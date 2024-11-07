<?php

    require 'config.php';
    
    $user = $dados['username'];
    $pass = $dados['senha'];
    
    if (!empty($user) && !empty($pass)){
        
        $sql = "SELECT * FROM usuarios WHERE username = '$user' and senha = '$pass'";
        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) > 0){
            echo json_encode(['status' => 'success', 'redirect' => '/index.html']);
        }
        else{
            echo json_encode(['status' => 'error', 'redirect' => '/login.html', 'message' => 'Usuário ou senha incorretos!']);
        }
    }
    else{
        echo json_encode(['status' => 'error', 'redirect' => '/login.html', 'message' => 'Preencha todos os campos!']);
    }

    $conexao->close();
?>
    