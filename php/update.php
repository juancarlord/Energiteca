
<div class="jumbotron" style="text-align: center;">
    <h1>Anulacion de venta</h1>
    <?php session_start();
        $_SESSION["saleID"] = $_GET['saleID'];
    ?>
</div>
<br>
<script>
    function addField(fieldValue) {
        console.log(fieldValue);
        if (fieldValue === 'Otro') {
            document.getElementById('hideThis').style.display = "";
        } else{
            document.getElementById('hideThis').style.display = "none";
        }
    }
    function addFieldTime(fieldValue) {
        console.log(fieldValue);
        if (fieldValue === 'No') {
            document.getElementById('hideThat').style.display = "";
        } else{
            document.getElementById('hideThat').style.display = "none";
        }
    }
    function addFieldCancel(fieldValue) {
        console.log(fieldValue);
        if (fieldValue != 'Venta') {
            document.getElementById('lastHide').style.display = "";
        } else{
            document.getElementById('lastHide').style.display = "none";
        }
    }
    function finalConfirmation() {
        var hide = document.getElementById("ruSure");
        if (hide.style.display === "none" ){
            hide.style.display = "";
        }   else {
            hide.style.display = "none";
        }
    }
</script>
<form action="php/addUpdate.php" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-floating mb-3">
                <select name="onTime" id="ATiempo" class="form-control" required onchange="addFieldTime(this.value);">
                    <option value="Si" default>Si</option>
                    <option value="No">No</option>
                </select>
                <label for="ATiempo">Entregado a tiempo</label>
            </div>
        </div>
        <div class="col" id="hideThat" style="display: none;">
            <div class="form-floating mb-3">
                <input type="text" name="noTiempo" id="noTiempo" class="form-control" placeholder="No a tiempo">
                <label for="noTiempo">Motivo no entrega a tiempo</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input type="datetime-local" name="tiempo" id="tiempo" class="form-control" placeholder="Tiempo">
                <label for="tiempo">Hora de entrega</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col" id="lastHide">
            <div class="form-floating mb-3">
                <select name="cancellation" id="saleChannel" class="form-control" onchange="addField(this.value);">
                    <option value="" default>Despligue la lista</option>
                    <option value="Bateria en garantia" default>Bateria en garantia</option>
                    <option value="No era problema de Bateria">No era problema de Bateria</option>
                    <option value="Cliente cancela servicio">Cliente cancela servicio</option>
                    <option value="Entrega tardia">Entrega tardia</option>
                    <option value="Cliente no tiene dinero para pago">Cliente no tiene dinero para pago</option>
                    <option value="Cliente requiere bateria termoencogible">Cliente requiere bateria termoencogible</option>
                    <option value="Cliente se retracta de la compra">Cliente se retracta de la compra</option>
                    <option value="Otro">Otro</option>
                </select>
                <label for="saleChannel">Motivo de la cancelacion</label>
            </div>
        </div>
        <div class="col" id="hideThis" style="display: none;">
            <div class="form-floating">
                <input type="text" name="otros" id="otros" placeholder="otros" class="form-control">
                <label for="otros">Digite el motivo</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <button type="button" id="confirm" class="btn btn-dark" onclick="finalConfirmation()">Enviar</button>
            </div>
        </div>
    </div>
    <br>
    <div class="row" id="ruSure" style="display: none;">
        <div class="col">
            <div class="form-floating">
                <p>Esta seguro de que desea actualizar los campos?</p>
                <input type="submit" name="sendNow" id="sendNow" class="btn btn-dark" value="Confirmar">
            </div>
        </div>
    </div>
</form>