<?php  

    include("connection.php");

    try{
    
        $sql = "SELECT * From departamentos";
        
        $send = $connect ->prepare($sql);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione el departamento</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idDepartamento]\">$row[Departamento]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>