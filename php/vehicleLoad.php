<?php  

    include("connection.php");

    try{
    
        $sql = "SELECT * From vehicle";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione el tipo de vehiculo</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idVehicle]\">$row[vehicleType]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>