<?php

session_start();
require_once 'connect.php';


$id = $_SESSION['user']['id'];
$image = "../uploades/".$_FILES['file']['name'];
mysqli_query($connect, "DELETE FROM `image_table`
(id, imagePath, id_author)
VALUES (NULL, '$image', '$id')"
);
header('Location: ../gallery.php');
