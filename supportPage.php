<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
        <h2>Поддержка</h2>
        <div class="aboutSection">
            <p>Lorem ipsum dolor sit amet,
                consectetur adipiscing elit.
                Pellentesque bibendum tellus quis tortor pharetra,
                id auctor ante ornare. Vestibulum vitae placerat purus,
                et congue felis. Etiam egestas ante et turpis tempor
                fringilla eget in elit. Integer orci ex,
                auctor vitae viverra at
            </p>
            <p>E-mail: sharephotoservise@gmail.com</p>
            <ul class="contacts">
                <li><a href=""><img src="img/whatsapp.png" alt=""></a></li>
                <li><a href=""><img src="img/instagram.png" alt=""></a></li>
                <li><a href=""><img src="img/vk.png" alt=""></a></li>
            </ul>
        </div>
    </section>
</main>
<footer>

</footer>
<??>
</body>
</html>
