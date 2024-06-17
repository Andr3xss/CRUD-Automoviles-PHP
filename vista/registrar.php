<?php
include("header.php");
include("../modelo/db.php");

$database = new Database();
$db = $database->getConection();

// Obtener colores
$colores_query = $db->query("SELECT id, nombre FROM colores");
$colores = $colores_query->fetchAll(PDO::FETCH_ASSOC);

// Obtener modelos
$modelos_query = $db->query("SELECT id, nombre FROM modelos");
$modelos = $modelos_query->fetchAll(PDO::FETCH_ASSOC);
?>

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
                            <select class="form-control" id="color" name="color" required>
                                <?php foreach ($colores as $color): ?>
                                    <option value="<?php echo $color['nombre']; ?>"><?php echo $color['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="marca" class="form-label">Marca</label>
                            <select class="form-control" id="marca" name="marca" required>
                                <?php foreach ($modelos as $modelo): ?>
                                    <option value="<?php echo $modelo['nombre']; ?>"><?php echo $modelo['nombre']; ?></option>
                                <?php endforeach; ?>
                            </select>
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


