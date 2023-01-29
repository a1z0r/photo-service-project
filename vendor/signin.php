<?php

    session_start();
$connect = mysqli_connect('localhost', 'mysql', 'mysql', 'test' );
if (!$connect) {
    die('error blyat');
}

    $number = $_POST['number'];
    $password = $_POST['password'];

    $result = mysqli_query($connect, "SELECT * FROM `users` WHERE `number` = '$number' AND `password` = '$password'");

    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Неправильно ввидены данные";
        exit();
    }
    $_SESSION['user'] = [
        "id" => $user['id'],
        "firstName" => $user['firstName'],
        "secondName" => $user['secondName'],
        "number" => $user['number'],
    ];
    $connect->close();
    header('Location: ../startPage.php');
