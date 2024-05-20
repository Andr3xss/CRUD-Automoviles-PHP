<?php include("header.php"); ?>
<link rel="stylesheet" href="../estilos/registrar.css">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Registra tu Lamborguini</h2>
                    <form action="../controlador/insert.php" method="post">
                        <div class="mb-3">
                            <label for="placa" class="form-label">Placa</label>
                            <input type="text" class="form-control" id="placa" name="placa" placeholder="Ingrese el número de placa" required>
                        </div>
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese el color" required>
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca" required>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Registrar">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-none d-md-block">
            <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/8ac5ee97541535.5ec75003e8c62.gif" alt="Imagen" class="img-fluid">
        </div>
    </div>
</div>

<?php include("footer.php"); ?>

