<?php  

    include("connection.php");

    try{
        
        $dataValue = $_GET["value"];

        $sql = "SELECT b.idproductBrand, b.brandName From productBrand as b, product as p WHERE b.idproduct = :dataValue and p.idproduct = :dataValue";
        $send = $connect ->prepare($sql);
        $send->bindParam(':dataValue', $dataValue);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la marca</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idproductBrand]\">$row[brandName]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>