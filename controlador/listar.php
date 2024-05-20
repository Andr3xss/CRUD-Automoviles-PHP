<?php

    include("../modelo/db.php");
    $database = new Database();
    $db = $database -> getConection();
    $query = "SELECT * FROM automovil";
    $statement = $db-> prepare($query);
    $statement-> execute();
    $automoviles = $statement-> fetchAll(PDO::FETCH_ASSOC);


?>