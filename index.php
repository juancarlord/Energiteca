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
    <div class="image-container">
        <img src="assets/logo.png" class="img-fluid" alt="Energiteca" srcset="">

    </div>
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="" id="floatingSelect" class="form-select" aria-label="Floating label select">
                            <!-- <option selected>Click para abrir</option> -->
                            <option value="CC">CC</option>
                            <option value="NIT">NIT</option>
                        </select>
                        <label for="floatingSelect">Tipo de documento</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" name="" id="floatingInput" class="form-control" placeholder="id">
                        <label for="floatingInput">Numero de identificacion</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="" id="name" class="form-control" placeholder="nombre cliente">
                        <label for="name">Nombre del cliente</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="city" class="form-control" onchange="cityLoad(this.value);">
                            <?php include_once "php/cityLoad.php"; ?>
                        </select>
                        <label for="city">Ciudad</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="" placeholder="direccion" id="address" class="form-control">
                        <label for="address">Direccion de entrega</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" placeholder="barrio" name="" id="barrio" class="form-control">
                        <label for="barrio">Barrio o sector</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" placeholder="cellphone" name="" id="cellPhone" class="form-control">
                        <label for="cellPhone">Telefono celular</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="" placeholder="landline" id="landline" class="form-control">
                        <label for="landline">Telefono fijo</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="email" placeholder="email" name="" id="email" class="form-control">
                        <label for="email">Correo electronico</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="" placeholder="plates" id="plates" class="form-control">
                        <label for="plates">Placas del vehiculo</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="vehicleType" class="form-control">
                            <option value="Automovil">Automovil</option>
                            <option value="Campero">Campero, Camioneta, o Van</option>
                        </select>
                        <label for="vehicleType">Tipo de vehiculo</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="model" class="form-control">
                            <option value="">Audi</option>
                            <option value="">BMW</option>
                            <option value="">Chevrolet</option>
                        </select>
                        <label for="model">Modelo</label>
                    </div>

                </div>
            </div>
            <div class="row">
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
                        <button type="btn" class="btn btn-primary">Agregar otro producto</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="" id="payment" class="form-control">
                            <option value="PAYU">PayU</option>
                            <option value="PAYU">Tarjeta de credito</option>
                            <option value="PAYU">Tarjeta debito</option>
                        </select>
                        <label for="payment">Medio de pago</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="channel" class="form-control">
                            <option value="">Redes Sociales</option>
                            <option value="">Referido</option>
                        </select>
                        <label for="channel">Medio publicitario</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="branch" id="branch" class="form-control">
                            <?php include_once "php/branchLoad.php"; ?>
                        </select>
                        <label for="branch">Sucursal</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea name="" placeholder="comments" id="comments" style="height: 100px" class="form-control"></textarea>
                        <label for="comments">Observaciones</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" role="switch" name="" id="habeas" class="form-check-input">
                        <label for="habeas">Autoriza el guion de datos personales?</label>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="" id="type" class="form-control">
                            <option value="">Primera vez</option>
                            <option value="">Cliente habitual</option>
                        </select>
                        <label for="type">Es primera vez que compra en Energiteca?</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="typification" class="form-control">
                            <option value="">Venta telefonica inbound</option>
                            <option value="">Venta telefonica outbound</option>
                            <option value="">Venta whatsapp</option>
                        </select>
                        <label for="typification">Tipificacion de la llamada</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <input type="text" name="" placeholder="representative" id="representative" class="form-control">
                        <label for="representative">Asesor</label>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="" placeholder="saleChannel" id="saleChannel" class="form-control">
                        <label for="saleChannel">Canal de venta</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="" id="campaign" class="form-control">
                            <option value="">Inbound</option>
                            <option value="">Outbound</option>
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