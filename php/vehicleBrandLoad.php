<?php  

    include("connection.php");

    try{
        
        $dataValue = $_GET["value"];

        $sql = "SELECT vb.idvehicleBrand, vb.vehicleBrandName From vehicleBrand as vb, vehicle as v WHERE vb.idVehicle = :dataValue and v.idVehicle = :dataValue";
        $send = $connect ->prepare($sql);
        $send->bindParam(':dataValue', $dataValue);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la marca</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idvehicleBrand]\">$row[vehicleBrandName]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>