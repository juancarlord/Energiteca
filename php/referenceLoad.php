<?php  

    include("connection.php");

    try{
        
        $dataValue = $_GET["value"];

        $sql = "SELECT r.idproductReference, r.referenceName From productReference as r, productBrand as b WHERE r.idproductBrand = :dataValue and b.idproductBrand = :dataValue";
        $send = $connect ->prepare($sql);
        $send->bindParam(':dataValue', $dataValue);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la referencia</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idproductReference]\">$row[referenceName]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>