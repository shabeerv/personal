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

    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
     }

    if(isset($_POST['sendMessage']))
    {
        $uname = $_POST['name'];
        $uemail = $_POST['email'];
        $uphone = $_POST['phone'];
        $umessage = $_POST['message'];

        $query =  "INSERT INTO contact(uname, uemail, uphone, umessage) VALUES ('$uname', '$uemail', '$uphone', '$umessage')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "New record created successfully";
         } else {
            echo "Error: " . $query . "" . mysqli_error($conn);
         }

    }

?>