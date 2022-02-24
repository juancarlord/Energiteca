<?php  

    include("connection.php");

    try{
        
        $dataValue = $_GET["value"];

        $sql = "SELECT m.idMunicipio, m.nombre From municipios as m, departamentos as d WHERE m.departamentoID = :dataValue and d.idDepartamento = :dataValue";
        $send = $connect ->prepare($sql);
        $send->bindParam(':dataValue', $dataValue);
        $send->execute();
        $test = $send -> fetchAll();
        echo "<option selected>Seleccione la ciudad de entrega</option>";
        foreach($test as $row){
            echo "<option value=\"$row[idMunicipio]\">$row[nombre]</option>";
        }
        $connect = null;
        
    }
    catch(PDOException $e){
        echo "Fallo";
        echo "Error: ".$e->getMessage();
    }

?>