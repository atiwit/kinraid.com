<?php

    $db_host = "localhost";
    $db_user = "kinraid_web";
    $db_pass = "TFWfX1rQHs";
    $db_name = "kinraid_web";

    try {
        $conn = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    catch (PDOException $e){
        echo "Failed" . $e->getMessage();
    }

    
?>