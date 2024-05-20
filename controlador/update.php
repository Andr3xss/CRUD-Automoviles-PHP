<?php
include("../modelo/automovil.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $db_file = "../modelo/db.php";
    if (file_exists($db_file)) {
        include($db_file);

        $database = new Database();
        $db = $database->getConection();

        
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $marca = $_POST["marca"];

        
        $query_update = "UPDATE automovil SET color = :color, marca = :marca WHERE placa = :placa";
        $statement_update = $db->prepare($query_update);

    
        $statement_update->bindParam(':placa', $placa, PDO::PARAM_STR);
        $statement_update->bindParam(':color', $color, PDO::PARAM_STR);
        $statement_update->bindParam(':marca', $marca, PDO::PARAM_STR);

        
        if ($statement_update->execute()) {
            echo "Los datos se actualizaron correctamente.";
        } else {
            echo "Error al actualizar los datos.";
        }
    } else {
        echo "Error: El archivo db.php no pudo ser incluido.";
    }
} else {
    echo "Error: Se esperaba una solicitud POST.";
}
?>
