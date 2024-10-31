<?php
    
    $host = 'localhost';
    $user = 'andré';
    $password = '';
    $db = 'ccg';

    $conexao = new mysqli($host, $user, $password, $db);

 
        
    $name = addslashes($_POST['nome']);
    $about = addslashes($_POST['sobre']);
    $date = addslashes($_POST['data_nasc']);
    $cpf = addslashes($_POST['cpf']);
    $sexo = addslashes($_POST['sexo']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $cep = addslashes($_POST['cep']);
    $address = addslashes($_POST['endereco']);
    $number = addslashes($_POST['numero']);
    $comp = addslashes($_POST['complemento']);
    $motive = addslashes($_POST['motivo']);
    $animal = addslashes($_POST['animais']);


    $result = mysqli_query($conexao, "INSERT INTO formularios(nome,sobre,data_nasc,cpf,sexo,email,telefone,cep,endereco,numero,complemento,motivo,animais) 
    VALUES ('$name','$about','$date','$cpf','$sexo','$email','$telefone','$cep','$address','$number','$comp','$motive','$animal')");


    

?>