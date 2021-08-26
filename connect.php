<?php
    $fullName =  $_POST['fullName'];
    $email = $_POST['email'];
    $message = $_POST['message'];

     //Database connection
    $conn = new mysqli("biketrace.se.mysql", "biketrace_se_digitron", "Nitai161@8", "biketrace_se_digitron");
    if($conn->connect_error){
            die('Connection failed : '.$conn->connect_error);
    }else{
            $stmt = $conn->prepare("INSERT INTO BikeTrace_contact(fullName, email, message)VALUES(?, ?, ?)");
            $stmt->bind_param("sss",$fullName, $email, $message);
            $stmt->execute();
            $stmt->close();
            $conn->close();
    }
?>