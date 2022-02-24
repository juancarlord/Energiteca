<?php 

    include_once 'connection.php';

    try {
        
        $dateNow = date("Y-m-d");
        $claveVenta = "5468dfksdjfwo-ierj56iufe554-as06456";

        $idtype = $_POST['idtype'];
        $idnumber = $_POST['idnumber'];
        $customerName = $_POST['customerName'];
        $deliveryState = $_POST['deliveryState'];
        $deliveryCity = $_POST['deliveryCity'];
        $deliveryAddress = $_POST['deliveryAddress'];
        $neighborhood = $_POST['neighborhood'];
        $addressPlus = $_POST['addressPlus'];
        $cellphone = $_POST['cellphone'];
        $email = $_POST['email'];
        $plates = $_POST['plates'];
        $model = $_POST['model'];
        $vReference = $_POST['vReference'];
        $productType = $_POST['productType'];
        $brand = $_POST['brand'];
        $pReference = $_POST['pReference'];
        $quantity = $_POST['quantity'];
        $price = $_POST['grandTotal'];
        $payment = $_POST['payment'];
        $marketing = $_POST['marketing'];
        $cityBranch = $_POST['cityBranch'];
        $branch = $_POST['branch'];
        $comments = $_POST['comments'];
        $habeas = $_POST['habeas'];
        $clientType = $_POST['clientType'];
        $callTypification = $_POST['callTypification'];
        $representative = $_POST['representative'];
        $saleChannel = $_POST['saleChannel'];
        $campaign = $_POST['campaign'];


        // envio de datos a la tabla cliente
        $customerSQL = "INSERT INTO customer(idType, idNumber, customerName, customerType, marketingChannel, customerAddress, customerZone, customerCellphone, customerDetails, customerEmail, creationDate) VALUES (:idtype, :idnumber, :customerName, :customerType, :marketingChannel, :customerAddress, :customerZone, :customerCellphone, :customerDetails, :customerEmail, :creationDate)";

        $sendCustomer = $connect -> prepare($customerSQL);
        
        $sendCustomer->bindParam(':idtype',$idtype);
        $sendCustomer->bindParam(':idnumber',$idnumber);
        $sendCustomer->bindParam(':customerName',$customerName);
        $sendCustomer->bindParam(':customerType',$clientType);
        $sendCustomer->bindParam(':marketingChannel',$marketing);
        $sendCustomer->bindParam(':customerAddress',$deliveryAddress);
        $sendCustomer->bindParam(':customerZone',$neighborhood);
        $sendCustomer->bindParam(':customerCellphone',$cellphone);
        $sendCustomer->bindParam(':customerDetails',$addressPlus);
        $sendCustomer->bindParam(':customerEmail',$email);
        $sendCustomer->bindParam(':creationDate',$dateNow);
        
        $sendCustomer->execute();
        //ID del cliente
        $customerID = $connect->lastInsertId();

        // Envio de datos a la tabla vehiculo
        $vehicleSQL = "INSERT INTO vehicleReference(vehicleReferenceName, idvehicleBrand) VALUES (:vReference, :model)";
        
        $sendVehicle = $connect ->prepare($vehicleSQL);

        $sendVehicle->bindParam(':vReference',$vReference);
        $sendVehicle->bindParam(':model',$model);

        $sendVehicle->execute();
        //ID del vehiculo
        $vehicleID = $connect->lastInsertId();
        

        //Envio de datos a la tabla customer sale
        $saleSQL = "INSERT INTO customerSale(claveDeVenta, saleDate, saleChannel, vehiclePlates, complies, comments, representative, total, idPayment, idBranch, idVehicle, idCampaign, idCallTypification, idCustomer, ventaAnulada, estadoFinal) VALUES (:claveVenta, :saleDate, :saleChannel, :vehiclePlates, :complies, :comments, :representative, :total, :idPayment, :idBranch, :idVehicle, :idCampaign, :idCallTypification, :idCustomer, \"No\", 1)";

        $dateSale = date('Y-m-d');
        $sendSale = $connect->prepare($saleSQL);

        $total = $price * $quantity;

        $sendSale->bindParam(':claveVenta', $claveVenta);
        $sendSale->bindParam(':saleDate', $dateSale);
        $sendSale->bindParam(':saleChannel', $saleChannel);
        $sendSale->bindParam(':vehiclePlates', $plates);
        $sendSale->bindParam(':complies', $habeas);
        $sendSale->bindParam(':comments', $comments);
        $sendSale->bindParam(':representative', $representative);
        $sendSale->bindParam(':total', $total);
        $sendSale->bindParam(':idPayment', $payment);
        $sendSale->bindParam(':idBranch', $branch);
        $sendSale->bindParam(':idVehicle', $vehicleID);
        $sendSale->bindParam(':idCampaign', $campaign);
        $sendSale->bindParam(':idCallTypification', $callTypification);
        $sendSale->bindParam(':idCustomer', $customerID);


        $sendSale->execute();
        //ID de la venta
        $saleID = $connect->lastInsertId();

        //Envio de datos a la table Customerproduct
        $productsaleSQL = "INSERT INTO customerProduct(idProduct, idCustomerSale, price, quantity) VALUES(:idProduct, :idCustomerSale, :price, :quantity)";

        $sendSP = $connect->prepare($productsaleSQL);

        $sendSP->bindParam(':idProduct', $pReference);
        $sendSP->bindParam(':idCustomerSale', $saleID);
        $sendSP->bindParam(':price', $price);
        $sendSP->bindParam(':quantity', $quantity);

        $sendSP->execute();

        header("Location:../index.php");

    } catch (PDOException $e) {
        echo "Fallo".'<br>';
        echo $vehicleID .'<br>';
        echo $customerID.'<br>';
        echo $total.'<br>';
        print $claveVenta.'<br>';
        print $dateSale.'<br>';
        print $saleChannel.'<br>';
        print $plates.'<br>';
        print $habeas.'<br>';
        print $comments.'<br>';
        print $representative.'<br>';
        print $total.'<br>';
        print $payment.'<br>';
        print $branch.'<br>';
        print $vehicleID.'<br>';
        print $campaign.'<br>';
        print $callTypification.'<br>';
        echo "Error: ".$e->getMessage();
    }finally{
        echo "Conexion cerrada";
        $connect = null;
        die();
    }
?>