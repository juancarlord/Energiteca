<?php  

    include("connection.php");

    try{
    
        $sql = "SELECT * From callTypification";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la tipificacion</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idCallTypification]\">$row[callType]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>