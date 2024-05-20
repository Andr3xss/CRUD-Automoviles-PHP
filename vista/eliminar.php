<?php
include("header.php");
?>

<link rel="stylesheet" href="../estilos/eliminar.css">

<div class="container mt-5">
    <form action="../controlador/delete.php" method="post">
        <div class="mb-3">
            <label for="placa" class="form-label">Ingrese la placa que desea eliminar</label>
            <input type="text" class="form-control" id="placa" name="placa" placeholder="Ingrese el número de placa">
        </div>
      
        <input class="btn btn-danger" type="submit" value="Eliminar">
    </form>
</div>

<?php
include("footer.php");
?>