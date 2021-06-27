<?php
    session_start();
    if(!$_SESSION['user']){
        header("Location: /");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form style="display:flex; justify-content: center; flex-wrap: nowrap">
        <div class="align-items:center;">
            <img src="<?= $_SESSION['user']['avatar']?>" width="300" alt="">
            <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name']?></h2>
            <a href="#"><?= $_SESSION['user']['email']?></a>
            <a href="vendor/logout.php" class="logout">Выход</a>
        </div>
    </form>
</body>
</html>