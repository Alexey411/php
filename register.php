<?php
    session_start();

    if($_SESSION['user']){
        header("Location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <title>Авторизация и регистрация</title>
</head>
<body>
    <form action="vendor/signup.php" method="post" enctype="multipart/form-data">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Изображения профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждения пароля</label>
        <input type="password" name="password_confirm" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>
        </p>
        <?php 
            if($_SESSION['message'])
            {
                echo '<p class="msg">' . $_SESSION['message'] . '</p>';    
            }  
            unset($_SESSION['message']);      
        ?>
    </form>
</body>
</html>