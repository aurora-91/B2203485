<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form div{
        display: flex;
        width: 300px;
    }
    form span{
        width: 25%;
    }
</style>
<body>
    <form action="luu.php" method="post">
        <div> <span>Name:</span><input type="text" name="name"></div>
        <div> <span>E-mail:</span> <input type="text" name="email"></div>
        <div> <span>Major ID </span><input type="text" name="major_id"></div>
        <div> <span>Birthday: </span><input type="date" name="birth"></div>
        <input type="submit">
    </form>
</body>
</html>