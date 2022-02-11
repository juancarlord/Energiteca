<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include("connection.php");

    try{
    
        $sql = "SELECT * From product";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
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