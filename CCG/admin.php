<?php

    require 'php/config.php';

    $sql = "SELECT * FROM formularios ORDER BY id DESC";
    $result = $conexao->query($sql);


?>
<!DOCTYPE html>
<html lang="pt-br">
        
    <head>

        <title> CCG/admin </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css"> 
        <script src="js/index.js"></script> 

    </head>

    <body>

        <table class="table">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobre</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Número</th>
                    <th scope="col">Complemento</th>
                    <th scope="col">Motivo</th>
                    <th scope="col">Animais</th>
                    <th scope="col">...</th>
                </tr>
                
            </thead>

            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                    }
                ?>
            </tbody>
        
        </table>

    </body>

</html>
