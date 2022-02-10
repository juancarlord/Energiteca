<?php
    $host = "localhost";
    $db = "energiteca";
    $user = "root";
    $pass = "";

    try {
        $connect = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexion exitosa <br>";
    }
    catch (PDOException $e){
        echo  "Connection failed: ". $e->getMessage();
    }

    ?>