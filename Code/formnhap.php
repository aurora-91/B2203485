<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        box-sizing: border-box;
    }
    form{
        border: 2px solid #000;
        width: 50%;
        padding: 20px;
    }
    form div{
        width: 95%;
        display: grid;
        grid-template-columns: 1fr 3fr;
        margin-bottom: 10px;
    }
</style>
<body>
    <form action="luu.php" method="post">
    <div>
        <span>Name: </span>
        <input type="text" name="name">
    </div>
    <div>
        <span>E-mail: </span>
        <input type="text" name="email">
    </div>
    <div>
        <span>Birthday: </span>
        <input type="date" name="birth">
    </div>
    <div>
        <span>Password: </span>
        <input type="password" name="pass">
    </div>
    <input type="submit">
    </form>
</body>
</html>