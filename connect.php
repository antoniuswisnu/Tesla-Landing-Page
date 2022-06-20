<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "tesla";
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $addres = $_POST['addres'];
    $zipCode = $_POST['zipCode'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];

    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn -> connect_error) {
        die("Connection failed: " .$conn -> connect_error);
    } else{
        $stmt = $conn->prepare("INSERT INTO `order` (`firstName`, `lastName`, `email`, `addres`, `zipCode`, `country`, `city`, `phone`, `type`, `amount`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param("ssssssssss", $firstName, $lastName, $email, $addres, $zipCode, $country, $city, $phone, $type, $amount);
        $stmt -> execute();
        echo "Order Success";
        $stmt -> close();
        $conn -> close();
    }

?>