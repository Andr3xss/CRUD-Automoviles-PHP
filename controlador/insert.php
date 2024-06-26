<?php
include("../modelo/automovil.php");

$db_file = "../modelo/db.php";
if (file_exists($db_file)) {
    include($db_file);

    $database = new Database();
    $db = $database->getConection();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $automovil = new Automovil();
        $automovil->setPlaca($_POST["placa"]);
        $automovil->setColor($_POST["color"]);
        $automovil->setMarca($_POST["marca"]);

        $query = "INSERT INTO automovil(placa, color, marca) VALUES (:placa, :color, :marca)";
        $statement = $db->prepare($query);

        $placa = $automovil->getPlaca();
        $color = $automovil->getColor();
        $marca = $automovil->getMarca();

        $statement->bindParam(':placa', $placa, PDO::PARAM_STR);
        $statement->bindParam(':color', $color, PDO::PARAM_STR);
        $statement->bindParam(':marca', $marca, PDO::PARAM_STR);

        if ($statement->execute()) {
            echo "Datos Guardados Correctamente";
        } else {
            echo "Los Datos No Se Guardaron";
        }
    }
} else {
    echo "Error: El archivo db.php no pudo ser incluido.";
}
?>

