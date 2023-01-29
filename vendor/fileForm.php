<?php
session_start();
require_once 'connect.php';

if(isset($_POST['submit']) and $_FILES){
    move_uploaded_file($_FILES['file']['tmp_name'], "../uploades/".$_FILES['file']['name']);

}

$id = $_SESSION['user']['id'];
$image = "../uploades/".$_FILES['file']['name'];
mysqli_query($connect, "INSERT INTO `image_table`
(id, imagePath, id_author)
VALUES (NULL, '$image', '$id')"
);
header('Location: ../gallery.php');



