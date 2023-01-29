<?php
    session_start();
    require_once 'connect.php';
    $firstName = $_POST['firstName'];
    $secondName= $_POST['secondName'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    mysqli_query($connect, "INSERT INTO `users` (`id`, `firstName`, `secondName`, `number`, `password`) 
    VALUES (NULL, '$firstName', '$secondName', '$number', '$password')"
    );

    $_SESSION['message'] = 'register complete';
    header('Location: ../auth.php');