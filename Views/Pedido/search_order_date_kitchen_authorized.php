<section>
    <div class="container">
        <div class="row">
        <div class="mx-auto">
            <form action="Controllers/pedido_controller.php" method="get">
              <center>
                <label>Selecciona la fecha para buscar pedido Cancelado</label><br>
                <input id="date" type="date" name="date" value="<?php echo date("Y-m-d");?>">
                <input id="date" type="hidden" name="action" value="search_order_date_kitchen_authorized"><br><br>
                <label>Buscar por:</label><br>
                <label>Dia:</label> <input type="radio" name="tipo" value="dia" checked><br>
                <label>Mes:</label> <input type="radio" name="tipo" value="mes"><br><br>
                <button type="submit" class="btn btn-info"> Buscar Pedido</button>
                  </center>
            </form>
        </div>
        </div>
    </div>
</section>
