<?php
    $host = "localhost:8888";
    $username = "root";
    $password = "aZrdguARUmW8";
    $dbname = "shabeervco";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }
?>