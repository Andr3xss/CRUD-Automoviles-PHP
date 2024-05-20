<?php
include("../modelo/automovil.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $db_file = "../modelo/db.php";
    if (file_exists($db_file)) {
        include($db_file);

        $database = new Database();
        $db = $database->getConection();

    
        $placa = $_POST["placa"];

        
        $query = "DELETE FROM automovil WHERE placa = :placa";
        $statement = $db->prepare($query);

        
        $statement->bindParam(':placa', $placa, PDO::PARAM_STR);

        
        if ($statement->execute()) {
            echo "Automóvil eliminado correctamente.";
        } else {
            echo "Error al eliminar el automóvil.";
        }
    } else {
        echo "Error: El archivo db.php no pudo ser incluido.";
    }
} else {
    echo "Error: Se esperaba una solicitud POST.";
}
?>

