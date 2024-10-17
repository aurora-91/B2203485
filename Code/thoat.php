<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        session_unset();
        session_destroy();

        if (isset($_COOKIE['user']))
            setcookie('user', '', time() - (86400 / 24), "/");
        if (isset($_COOKIE["fullname"]))    
            setcookie("fullname", '', time() - (86400 / 24), "/");
        if (isset($_COOKIE["id"]))    
            setcookie("id", '', time() - (86400 / 24), "/");

        header("Location: login.php");   
    ?>
</body>
</html>