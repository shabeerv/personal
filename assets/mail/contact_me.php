<?php
    include 'config.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $phone, $message]);
    echo "Record added";
?>