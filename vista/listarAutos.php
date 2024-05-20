<?php
    include("header.php");
    include("../controlador/listar.php");
?>
<link rel="stylesheet" href="../estilos/listarr.css">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Automóviles Registrados</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Placa</th>
                        <th scope="col">Color</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Acciones</th> <!-- Columna para el botón de actualizar -->
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($automoviles as $automovil): ?>
                        <tr>
                            <th scope="row"><?php echo $automovil["placa"];?></th>
                            <td><?php echo $automovil["color"];?></td>
                            <td><?php echo $automovil["marca"];?></td>
                            <td>
                                <!-- Botón para actualizar -->
                                <form action="actualizar.php" method="get">
                                    <input type="hidden" name="placa" value="<?php echo $automovil["placa"]; ?>">
                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <img src="https://i.pinimg.com/originals/d3/24/45/d324459c7a836b2618bbd4199305cc9e.gif" alt="Imagen" class="img-fluid">
        </div>
    </div>
</div>

<?php
    include("footer.php");
?>


