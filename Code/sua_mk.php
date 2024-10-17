<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlbanhang";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "select * from customers where email = '".$_POST['email']."'";
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $old_pass = $_POST['pass'];
            $new_pass = $_POST['newpass'];
            $confirm_pass = $_POST['confirm_pass'];
        }

        if (md5($old_pass) !== $rows['password']){
            echo "Mật khẩu cũ không đúng!";
        }
        else if ($new_pass !== $confirm_pass) {
            echo "Mật khẩu mới và mật khẩu xác nhận không khớp!";
        } 
        else if ($old_pass === $new_pass) {
            echo "Mật khẩu mới không được giống mật khẩu cũ!";
        }
        else{
            $sql = "update customers set password = '"
            .md5($new_pass)."'where email = '".$_POST['email']."'";
            if($conn->query($sql) == TRUE){
                echo "Mật khẩu đã được đổi thành công!";
            } else {
                echo "Có lỗi xảy ra. Vui lòng thử lại!";
            }
        }

        $conn->close();
    ?>
</body>
</html>