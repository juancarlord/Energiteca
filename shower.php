<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    
    <div class="container">
        <form action="php/insert.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-floating mb-3">
                        <select name="checker" id="model" class="form-control" 
                        onchange="mine(this.value);">
                        <?php include "php/loadchild.php" ?>
                    </select>
                    <label for="checker">Holi</label>
                </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                        <select name="test" id="poll" class="form-control">
                            <?php include "php/fromParent.php" ?>
                        </select>
                        <label for="test">Aqui se debe cargar</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <button type="btn" type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>

            </div>
        </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/cityLoad.js"></script>
    
</body>
</html>