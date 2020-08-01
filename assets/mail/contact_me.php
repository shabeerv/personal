<?php
    // DB Settings
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

    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        echo "No arguments Provided!";
        return false;
    }

    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $message = strip_tags(htmlspecialchars($_POST['message']));

    $query =  "INSERT INTO contact(name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
    $result = mysqli_query($conn, $query);
    
    return true;
    $conn->close();

?>