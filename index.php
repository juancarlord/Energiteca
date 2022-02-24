<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energiteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<script src="js/cityLoad.js"></script>
<script src="js/productLoad.js"></script>
<script src="js/referenceLoad.js"></script>
<script src="js/vehicleLoad.js"></script>
<script src="js/deliveryLoad.js"></script>
<script>
    function additional() {
        var hide = document.getElementById("hidden");
        var but = document.getElementById("cambio");
        if (hide.style.display === "none" ){
            hide.style.display = "";
            but.innerText = "Quitar producto adicional";
        }   else {
            hide.style.display = "none";
            but.innerText = "Agregar otro producto";
        }
    }
</script>
    <div class="image-container">
        <img src="assets/logo.png" class="img-fluid" alt="Energiteca" srcset="">

    </div>
    <div class="container">
        <form action="php/insertData.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="idtype" id="floatingSelect" class="form-select" aria-label="Floating label select">
                            <!-- <option selected>Click para abrir</option> -->
                            <option value="CC">CC</option>
                            <option value="NIT">NIT</option>
                        </select>
                        <label for="floatingSelect">Tipo de documento</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="idnumber" id="floatingInput" class="form-control" placeholder="id" required>
                        <label for="floatingInput">Numero de identificacion</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="customerName" id="name" class="form-control" placeholder="nombre cliente" required>
                        <label for="name">Nombre del cliente</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="deliveryState" id="deliveryState" class="form-control" onchange="deliveryLoad(this.value);" required>
                            <?php include "php/departmentLoad.php"; ?>
                        </select>
                        <label for="deliveryState">Departamento de entrega</label>
                    </div>
                </div>
                <div class="col">
                        <div class="form-floating">
                            <select name="deliveryCity" id="deliveryCity" class="form-control js-basic" required>
                                <?php include "php/deliveryCityLoad.php"; ?>
                            </select>
                            <label for="deliveryCity">Ciudad de entrega</label>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="deliveryAddress" placeholder="direccion" id="address" class="form-control" required>
                        <label for="address">Direccion de entrega</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" placeholder="barrio" name="neighborhood" id="barrio" class="form-control" required>
                        <label for="barrio">Barrio o sector</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="addressPlus" placeholder="addressPlus" id="addressPlus" class="form-control">
                        <label for="addressPlus">Complemento direccion</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" placeholder="cellphone" name="cellphone" id="cellPhone" class="form-control" required>
                        <label for="cellPhone">Telefono celular</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" placeholder="email" name="email" id="email" class="form-control" required>
                        <label for="email">Correo electronico</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="plates" placeholder="plates" id="plates" class="form-control">
                        <label for="plates">Placas del vehiculo</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="vehicleType" id="vehicleType" class="form-control" onchange="vehicleLoad(this.value)"; required>
                            <?php include "php/vehicleLoad.php";  ?>
                        </select>
                        <label for="vehicleType">Tipo de vehiculo</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="model" id="model" class="form-control" required>
                            <?php include "php/vehicleBrandLoad.php"; ?>
                        </select>
                        <label for="model">Marca</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="vReference" placeholder="" id="vReference" class="form-control" required>
                        <label for="vReference">Modelo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="productType" id="product" class="form-control" onchange="productLoad(this.value);" required>
                            <?php include "php/productLoad.php"; ?> 
                        </select>
                        <label for="product">Producto</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="brand" id="brand" class="form-control" onchange="brandLoad(this.value);" required>
                            <?php include "php/brandLoad.php"; ?>
                        </select>
                        <label for="brand">Marca</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="pReference" id="reference" class="form-control" required>
                            <?php include "php/referenceLoad.php"; ?>
                        </select>
                        <label for="reference">Referencia</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" placeholder="quantity" name="quantity" id="quantity" class="form-control" required>
                        <label for="quantity">Cantidad</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" name="grandTotal" placeholder="grandTotal" id="grandTotal" class="form-control" required>
                        <label for="grandTotal">Valor venta</label>
                    </div>
                </div>
            </div>
            <div class="row" id="hidden" style="display: none;" >
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="" id="product" class="form-control" onchange="productLoad(this.value);">
                            <?php include "php/productLoad.php"; ?> 
                        </select>
                        <label for="product">Producto</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="brand" id="brand" class="form-control" onchange="brandLoad(this.value);">
                            <?php include "php/brandLoad.php"; ?>
                        </select>
                        <label for="brand">Marca</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="reference" class="form-control">
                            <?php include "php/referenceLoad.php"; ?>
                        </select>
                        <label for="reference">Referencia</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" placeholder="quantity" name="" id="quantity" class="form-control">
                        <label for="quantity">Cantidad</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="number" name="" placeholder="grandTotal" id="grandTotal" class="form-control">
                        <label for="grandTotal">Valor venta</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <button type="button" id="cambio" class="btn btn-primary" onclick="additional()">Agregar otro producto</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="payment" id="payment" class="form-control" required>
                            <?php include "php/paymentLoad.php"; ?>
                        </select>
                        <label for="payment">Medio de pago</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="marketing" id="channel" class="form-control" required>
                            <option selected disabled>Seleccione el medio</option>
                            <option value="INTERNET">INTERNET</option>
                            <option value="VALLA PUBLICITARIA">VALLA PUBLICITARIA</option>
                            <option value="TELEVISION">TELEVISION</option>
                            <option value="REFERIDO">REFERIDO</option>
                            <option value="REDES SOCIALES">REDES SOCIALES</option>
                            <option value="ENERGITECA">ENERGITECA</option>
                            <option value="RADIO">RADIO</option>
                            <option value="PRENSA">PRENSA</option>
                            
                        </select>
                        <label for="channel">Medio publicitario</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="cityBranch" id="city" class="form-control" onchange="cityLoad(this.value);" required>
                            <?php include_once "php/cityLoad.php"; ?>
                        </select>
                        <label for="city">Ciudad de la sucursal</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="branch" id="branch" class="form-control" required>
                            <?php include_once "php/branchLoad.php"; ?>
                        </select>
                        <label for="branch">Sucursal</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea name="comments" placeholder="comments" id="comments" style="height: 100px" class="form-control"></textarea>
                        <label for="comments">Observaciones</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" role="switch" name="habeas" id="habeas" class="form-check-input" value="1" required>
                        <label for="habeas">Autoriza el guion de datos personales?</label>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="clientType" id="type" class="form-control" required>
                            <option selected disabled>Seleccione</option>
                            <option value="PrimeraVez">Primera vez</option>
                            <option value="Habitual">Cliente habitual</option>
                        </select>
                        <label for="type">Es primera vez que compra en Energiteca?</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="callTypification" id="typification" class="form-control" required>
                            <?php include "php/typificationLoad.php"; ?>
                        </select>
                        <label for="typification">Tipificacion de la llamada</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="representative" placeholder="representative" id="representative" class="form-control" required>
                        <label for="representative">Asesor</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                    <select name="saleChannel" id="saleChannel" class="form-control" required>
                            <option value="Telefono">Telefono</option>
                            <option value="Whatsapp">Whatsapp</option>
                        </select>
                        <label for="saleChannel">Canal de venta</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="campaign" id="campaign" class="form-control" required>
                            <option value="1">Inbound</option>
                            <option value="2">Outbound</option>
                        </select>
                        <label for="campaign">Tipo de campaña</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div class="negro">
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>