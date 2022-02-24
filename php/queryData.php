<?php
    ini_set('display_errors', 1);

    if (isset($_GET['enerQuery'])) {
        
        include 'connection.php';

        try {
            $saleID = $_GET['saleID'];

            

            $sql = 'SELECT cs.claveDeVenta, cs.saleDate, cs.saleChannel, cs.vehiclePlates, cs.comments, cs.representative, cs.total, p.paymentType,cy.cityName, b.branchName, cus.customerName, cus.idNumber, cus.customerEmail, cs.ventaAnulada FROM customerSale as cs, payment as p, branch as b, city as cy, customer as cus WHERE cs.claveDeVenta = :saleID AND cs.idPayment = p.idPayment AND cs.idBranch = b.idBranch AND b.idCity = cy.idCity AND cs.idCustomer = cus.idCustomer' ;

            $send = $connect->prepare($sql);
            $send->bindParam(':saleID',$saleID);

            $send->execute();
            $view = $send->fetchAll();
            // print_r($view);
            echo "<table class=\"table\">
                    <tr>
                        <th>CV</th>
                        <th>Fecha</th>
                        <th>Canal</th>
                        <th>Cliente</th>
                        <th>Correo</th>
                        <th>Placas</th>
                        <th>Asesor</th>
                    </tr>";
                        foreach ($view as $row) {
                echo "<tr>
                    <td>$row[claveDeVenta]</td>
                    <td>$row[saleDate]</td>
                    <td>$row[saleChannel]</td>
                    <td>$row[customerName]</td>
                    <td>$row[customerEmail]</td>
                    <td>$row[vehiclePlates]</td>
                    <td>$row[representative]</td>
                
                </tr>";
            }
            echo "</table>";
            echo "<table class=\"table\">
            <tr>
                <th>Comentarios</th>
                <th>Ciudad</th>
                <th>Sucursal</th>
                <th>Venta Anulada?</th>
            
            
            </tr>";
            foreach ($view as $row) {
                echo "<tr>
                    <td>$row[comments]</td>
                    <td>$row[cityName]</td>
                    <td>$row[branchName]</td>
                    <td>$row[ventaAnulada]</td>

                    </tr>";
            }        
            echo "</table>";
            
            include 'update.php';
        } catch (PDOException $e) {
            echo 'Error '.$e;
        }
    }
    
?>