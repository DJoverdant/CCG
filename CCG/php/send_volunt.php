<?php
    
    require 'config.php';

    $name = $dados['nome'];
    $about = $dados['sobre'];
    $date = $dados['data_nasc'];
    $cpf = $dados['cpf'];
    $sexo = $dados['sexo'];
    $email = $dados['email'];
    $telefone = $dados['telefone'];
    $cep = $dados['cep'];
    $address = $dados['endereco'];
    $number = $dados['numero'];
    $comp = $dados['complemento'];
    $motive = $dados['motivo'];
    $animal = $dados['animais'];

    $sql = "INSERT INTO formularios(nome,sobre,data_nasc,cpf,sexo,email,telefone,cep,endereco,numero,complemento,motivo,animais) 
    VALUES ('$name','$about','$date','$cpf','$sexo','$email','$telefone','$cep','$address','$number','$comp','$motive','$animal')";

    $conexao->query($sql);
    $conexao->close();

?>