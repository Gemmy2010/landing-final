<?php
    $fullName =  $_POST['fullName'];
    $email = $_POST['email'];
    $country = $_POST['country'];

     //Database connection
    $conn = new mysqli(");
    if($conn->connect_error){
            die('Connection failed : '.$conn->connect_error);
    }else{
            $stmt = $conn->prepare("INSERT INTO BikeTrace_newsletter (fullName, email, country)VALUES(?, ?, ?)");
            $stmt->bind_param("sss",$fullName, $email, $country);
            $stmt->execute();
            $stmt->close();
            $conn->close();
    }
?>
