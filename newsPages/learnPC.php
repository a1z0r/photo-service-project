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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <div class="navMenu">
            <ul>
                <li><a href="../startPage.php">Home</a></li>
                <li><a href="../gallery.php">Gallery</a></li>
            </ul></div>
        <div><a href=""><img src="../img/logo.png" alt=""></a></div>
        <div class="navMenu">
            <ul>
                <li><a href="../aboutPage.php">About us</a></li>
                <li><a href="../supportPage.php">Support</a></li>
            </ul></div>
    </nav>
    <form action="">
        <h2><?= $_SESSION['user']['firstName']?></h2>
        <h2><?= $_SESSION['user']['secondName']?></h2>
        <h2><?= $_SESSION['user']['number']?></h2>
        <a href="vendor/logout.php">Выйти блять</a>
    </form>
</header>
<main>
    <section  class="newsSection">
        <h2>Learn-PC</h2>
        <img src="../img/danil.jpeg" alt="">
        <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Ad amet, aspernatur at autem, explicabo fugiat
            laboriosam magnam molestias natus necessitatibus numquam odit quo
            ratione similique sunt tempora ullam unde ut.
        </p>
        <div class="comments">
            <h3>Оставить комментарий</h3>
            <form action="">
                <input type="textarea"><br>
                <button>Отправить</button>
            </form>
        </div>
    </section>
</main>
<footer>

</footer>
<??>
</body>
</html>
