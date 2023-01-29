<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/auth.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Авторизация</h1>
        <form action="vendor/signin.php" method="post">
            <input minlength="5" type="text" name="number" placeholder="Телефон" required>
            <input minlength="5" type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
            <p>
                Нет аккаунта? - <a href="register.php">Регистрация</a>
            </p>
        </form>
    </main>
    <??>
</body>
</html>