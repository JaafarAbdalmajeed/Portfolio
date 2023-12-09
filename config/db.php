<?php 
    $host = 'localhost';
    $dbname = 'Portfolio';
    $user = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (BDOException $e){
        echo 'ERROR: '. $e.getMessage();
    }


?>