<?php
include("header.php");


if (isset($_GET['placa'])) {
    
    $placa = $_GET['placa'];

    echo "<h2>Editar Automóvil con Placa: $placa</h2>";

    
    ?>
    <link rel="stylesheet" href="../estilos/registrar.css">

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4">Editar Automóvil</h2>
                        <form action="../controlador/update.php" method="post">
                            <div class="mb-3">
                                <label for="placa" class="form-label">Placa</label>
                                <!-- Mostrar la placa como campo de solo lectura -->
                                <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $placa; ?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <!-- Campo de entrada para el color -->
                                <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese el color" required>
                            </div>
                            <div class="mb-3">
                                <label for="marca" class="form-label">Marca</label>
                                <!-- Campo de entrada para la marca -->
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca" required>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Actualizar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/8ac5ee97541535.5ec75003e8c62.gif" alt="Imagen" class="img-fluid">
            </div>
        </div>
    </div>
    <?php
} else {
    // Si no se recibió la placa, mostrar un mensaje de error
    echo "Error: No se recibió la placa del automóvil.";
}

include("footer.php");
?>


