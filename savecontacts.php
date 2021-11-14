<?php

    require_once "./config.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];


    // Modals
    $fetch_modal = "INSERT INTO `contacts`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";                            
    $stmt = $conn -> prepare($fetch_modal);
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    $stmt->execute();
    echo "<script> window.location.replace('contact-us.php'); </script>";

?>