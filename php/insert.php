<?php

    include('connection.php');

    try{

        $product = $_POST['product'];
        $checker = $_POST['checker'];

        $sql = "INSERT INTO productBrand(brandName, idproduct) VALUES (:product, :checker)";

        $send = $connect ->prepare($sql);
        $send->bindParam(':product', $product);
        $send->bindParam(':checker', $checker);

        $send->execute();

        echo "Datos cargados correctamente";

        header("Location:../dataIns.php");
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }finally{
        echo "Conexion cerrada";
        $connect = null;
        die();
    }

    
?>