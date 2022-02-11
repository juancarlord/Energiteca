<?php  

    include("connection.php");

    try{
        
        $dataValue = $_GET["value"];

        $sql = "SELECT b.idBranch, b.branchName From branch as b, city as c WHERE b.idCity = :dataValue and c.idCity = :dataValue";
        $send = $connect ->prepare($sql);
        $send->bindParam(':dataValue', $dataValue);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la sucursal</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idBranch]\">$row[branchName]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>