<?php  

    include("connection.php");

    try{
    
        $sql = "SELECT * From product";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione el producto</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idproduct]\">$row[productName]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>