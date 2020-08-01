<?php
    $host = "localhost:8888";
    $username = "shabeer";
    $password = "12345678";
    $dbname = "shabeervco";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "success";
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }
?>