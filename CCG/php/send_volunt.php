<?php
    
    require 'config.php';

    header('Content-Type: application/json');
    $data = json_decode(file_get_contents("php://input"), true);

    $name = $data['nome'];
    $about = $data['sobre'];
    $date = $data['data_nasc'];
    $cpf = $data['cpf'];
    $sexo = $data['sexo'];
    $email = $data['email'];
    $telefone = $data['telefone'];
    $cep = $data['cep'];
    $address = $data['endereco'];
    $number = $data['numero'];
    $comp = $data['complemento'];
    $motive = $data['motivo'];
    $animal = $data['animais'];

    $result = "INSERT INTO formularios(nome,sobre,data_nasc,cpf,sexo,email,telefone,cep,endereco,numero,complemento,motivo,animais) 
    VALUES ('$name','$about','$date','$cpf','$sexo','$email','$telefone','$cep','$address','$number','$comp','$motive','$animal')";

    $conexao->query($result);
    $conexao->close();

?>