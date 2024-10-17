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

    $sql = "select fullname, email from customers where email = '"
    .$_POST["email"]."' and password = '".md5($_POST["pass"])."'";

    // sql injection 1=1
    //  $sql = "select fullname, email from customers where email = '"
    // .$_POST["email"]."'or 1=1 and password = '".md5($_POST["pass"])."' or 1=1";

    //sql injection '' = ''
    // $sql = "select fullname, email from customers where email = '"
    // .$_POST["email"]."'or ''='' and password = '".md5($_POST["pass"])."' or ''=''";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Dang nhap thanh cong <br>";
        $row = $result->fetch_assoc();
        
        //modify cookie
        // $cookie_name = "user";
        // $cookie_value = $row['email'] ;
        // setcookie($cookie_name, $cookie_value, time() + (86400 / 24), "/");
        // setcookie("fullname", $row['fullname'], time() + (86400 / 24), "/");
        // setcookie("id", $row['id'], time() + (86400 / 24), "/");
        
        //modify session
        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];

        header('Location: homepage.php');

        //echo "email:".$row['email']. ' Fullname: '.$row['fullname'];
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        //modify
        header('Refresh: 3;url=login.php');
    }

    $conn->close();
    ?>
</body>
</html>