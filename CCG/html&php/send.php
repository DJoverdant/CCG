<?php
    
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'ccg';

    $conexao = new mysqli($host, $user, $password, $db);

    if ($conexao->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
        
    $name = $_POST['nome'];
    $about = $_POST['sobre'];
    $date = $_POST['data_nasc'];
    $cpf = $_POST['cpf'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $address = $_POST['endereco'];
    $number = $_POST['numero'];
    $comp = $_POST['complemento'];
    $motive = $_POST['motivo'];
    $animal = $_POST['animais'];

    $result = "INSERT INTO formularios(nome,sobre,data_nasc,cpf,sexo,email,telefone,cep,endereco,numero,complemento,motivo,animais) 
    VALUES ('$name','$about','$date','$cpf','$sexo','$email','$telefone','$cep','$address','$number','$comp','$motive','$animal')";

    $conexao->query($result);

    $conexao->close();
    ?>

?>