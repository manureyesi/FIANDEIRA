<?php
    $servername = "localhost";
    $username = "user";
    $password = "user";
    $dbname = "fiandeira";

        $conexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $email = $_POST["email"];
        $datos = array($email);

        $encontrado = false;

        $select = $conexion->prepare("SELECT * FROM `newsleter` WHERE `email` = ?");

        $select -> execute($datos);

        $resultado = $select->fetchAll();

      	foreach ($resultado as $row){

            if($row["email"] == $email){

                $encontrado = true;

            }

        }

        if($encontrado == false){

          $sql = $conexion->prepare("INSERT INTO newsleter (email) VALUES (?)");

          $sql -> execute($datos);

        }

        header('Location: ../index.html');
?>
