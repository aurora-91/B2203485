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
        grid-template-rows: 1fr 1fr;
        margin-bottom: 10px;
    }

    form div input{
        padding: 3px;
        margin-top: 2px;
    }
</style>
<body>
    <form action="sua_mk.php" method="post">
    <h2>Đổi mật khẩu</h2>    
    <div>
            <span>Email</span>
            <input type="text" name="email">
        </div>
        <div>
            <span>Password</span>
            <input type="password" name="pass">
        </div>
        <div>
            <span>New password</span>
            <input type="password" name="newpass">
        </div>
        <div>
            <span>Confirm password</span>
            <input type="password" name="confirm_pass">
        </div>
        <input type="submit" value="Sửa">
    </form>
</body>
</html>