<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <div class="logo"><a href=""><img src="img/logo.png" alt=""></a></div>
    <nav>
        <div class="navMenu">
            <ul>
                <li><a href="startPage.php">Лента</a></li>
                <li><a href="gallery.php">Галерея</a></li>
                <li><a href="aboutPage.php">О нас</a></li>
                <li><a href="supportPage.php">Поддержка</a></li>
            </ul>
        </div>
    </nav>
    <div class="accontBlock">
        <form class="account" action="">
            <h2>Вы вошли как:</h2>
            <h2>Имя: <i> <?= $_SESSION['user']['firstName']?> </i> </h2>
            <h2>Фамилия: <i> <?= $_SESSION['user']['secondName']?> </i></h2>
            <h2>Номер телефона: <i> <?= $_SESSION['user']['number']?> </i></h2>
            <div class="logoutBtn"><h2><a href="vendor/logout.php">Выйти</a></h2></div>
        </form>
    </div>

</header>
<main>
    <section class="gallerySection">
        <h2>Ваша галерея</h2>
        <form class="uploadForm" method="post" action="vendor/fileForm.php" enctype="multipart/form-data">
            <input type="file" name="file" accept="image/x-png, image/jpeg" required><br>
            <input type="submit" name="submit" value="Загрузить">
        </form>
                <!-- The Modal -->
                <div id="myModal" class="modal">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="img01">
                    <div class="containerPhotosBtn">
                        <form action="vendor/deletePhoto.php" method="post">
                            <button>Edit</button>
                            <button>Delete</button>
                        </form>
                    </div>
                </div>

                <!-- Displays all photos from folder -->
            <div class="photoBlock">
                <div class="galleryBlock">
                    <div class="containerPhotos">
                    <?

                    require_once 'vendor/connect.php';
                    $id = $_SESSION['user']['id'];
                    mysqli_report(MYSQLI_REPORT_ERROR);
                    $res  = mysqli_query($connect, "SELECT * FROM image_table WHERE id_author = '$id'");
                    $imageg = mysqli_fetch_assoc($res);
                    $classImg = "class = 'gallery'";

                    do{
                        echo "<img ".$classImg." id='myImg' onclick='showImage(this)' src='".$imageg['imagePath']."' class='photo' width='auto' height='auto'/>";

                    }   while ($imageg = mysqli_fetch_assoc($res))
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        var modal = document.getElementById('myModal');
        var modalImg = document.getElementById('img01');

        function showImage(imgElement) {
            var src = imgElement.getAttribute("src");
            modal.style.display = "block";
            modalImg.src = src;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</main>
</body>
</html>