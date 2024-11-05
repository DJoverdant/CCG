<?php
    
    require 'config.php';

    session_start();

    $user = $dados['username'];
    $pass = $dados['senha'];
    
    $send = "SELECT senha FROM usuarios WHERE username = ?";
    $run = $conexao->prepare($send);
    $run->bind_param("s", $user);
    $run->execute();

    $result = $run->get_result();
    
    if ($result->num_rows > 0) {
        $credentials = $result->fetch_assoc();
    
        if (password_verify($pass, $credentials['senha'])){
            $_SESSION['id_user'] = $credentials['id'];
            $_SESSION['username'] = $credentials['username'];

            echo "deu certo";
            header("Location: ../index.html");
            exit();
        }
        else{
            echo "errou";
        }
    }
    else{
        echo "user n existe";
    }

    $conexao->close();
?>
    