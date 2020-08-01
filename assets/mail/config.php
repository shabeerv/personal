<?php
    $host = "localhost";
    $username = "shabeer";
    $password = "12345678";
    $dbname = "shabeervco";

    /*try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "success";!
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
    }*/

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if($conn)
    {
        echo "connection success";
    }
    else
    {
        echo "connection failed";
    }

    if(isset($_POST['sendMessage']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $query =  "INSERT INTO contact(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "success";
        }
        else
        {
            echo "fail";
        }

    }

?>