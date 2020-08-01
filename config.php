<?php

    $host = "localhost";
    $username = "shabeer";
    $password = "12345678";
    $dbname = "shabeervco";

    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST['sendMessage']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $query =  "INSERT INTO contact(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $query);

        if ($result) 
        {
            header("location:/");
        } 
        else 
        {
            echo "Error: {$query}". mysqli_error($conn);
        }
        $conn->close();
    }

?>