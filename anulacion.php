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
    <div class="image-container">
        <img src="assets/logo.png" class="img-fluid" alt="Energiteca" srcset="">

    </div>
    <div class="container">
        <form action="" method="GET">
            <div class="jumbotron" style="text-align: center;">
                <h1>Postproceso de Venta</h1>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" name="saleID" id="floatingInput" class="form-control" placeholder="id" required>
                        <label for="floatingInput">Digite la clave de venta</label>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="submit" name="enerQuery" value="Consultar" class="btn btn-dark">
                    </div>
                </div>
            </div>

        </form>
        <div class="container">
            <?php include 'php/queryData.php'; ?>

        </div>
    </div>
    <div class="negro">
        
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>