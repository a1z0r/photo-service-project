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
    <h1>Регистрация</h1>
        <form action="vendor/signup.php" method="post">
            <input minlength="3" type="text" placeholder="Имя" name="firstName" required>
            <input minlength="3" type="text" placeholder="Фамилия" name="secondName" required>
            <input minlength="5" type="text" placeholder="Телефон" name="number" required>
            <input minlength="5" type="password" id="Phone" placeholder="Пароль" name="password" required>
            <button name="check" onclick="CheckPassword(document.form1.text1) type="submit">Регистрация</button>
            <p>
                Есть аккаунта? - <a href="auth.php">Авторизация</a>
            </p>
        </form>
    </main>
    <??>
</body>
</html>