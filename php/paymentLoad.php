<?php  

    include("connection.php");

    try{
    
        $sql = "SELECT * From payment";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione el medio de pago</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idPayment]\">$row[paymentType]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>