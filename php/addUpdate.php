<?php
    ini_set('display_errors',1);
    session_start();
    if (isset($_SESSION['saleID'])) {
        $saleID = $_SESSION['saleID'];
    }else{
        echo 'No hay variable de sesion';
    }
    include 'connection.php';

    try {

        $onTime = $_POST['onTime'];
        $noTiempo = $_POST['noTiempo'];
        $tiempo = $_POST['tiempo'];
        $estado = 5;
        $cancellation = $_POST['cancellation'];
        $otros = $_POST['otros'];
        $anulado = "Si";
        $fechaAnulacion = date("Y-m-d");
        

        $updateData = "UPDATE customerSale SET ventaAnulada = :anulada,  aTiempo = :onTime, motivoNoEntrega = :noTiempo, horaEntrega = :tiempo, estadoFinal = :estado, motivoCancelacion = :cancellation, otroMotivo = :otros, fechaAnulacion = :fechaAnulacion  WHERE claveDeVenta = :claveDeVenta";

        $sendUpdate = $connect->prepare($updateData);

        $sendUpdate->bindParam(':anulada',$anulado);
        $sendUpdate->bindParam(':onTime',$onTime);
        $sendUpdate->bindParam(':noTiempo',$noTiempo);
        $sendUpdate->bindParam(':tiempo',$tiempo);
        $sendUpdate->bindParam(':estado',$estado);
        $sendUpdate->bindParam(':cancellation',$cancellation);
        $sendUpdate->bindParam(':otros',$otros);
        $sendUpdate->bindParam(':claveDeVenta',$saleID);
        $sendUpdate->bindParam(':fechaAnulacion',$fechaAnulacion);


        $sendUpdate->execute();
        
        header("Location: ../anulacion.php");

    } catch (PDOException $e) {
        echo 'Error '.$e->getMessage();
    } finally {
        $connect = null;
        die();
    }
?>