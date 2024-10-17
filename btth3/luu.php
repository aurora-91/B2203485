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
        $dbname = "qlsv";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $date = date_create($_POST["birth"]);
        $sql = "INSERT INTO student (fullname, email, birthday,major_id) VALUES

        ('".$_POST["name"] ."', '".$_POST["email"] ."', '".$date ->format('Y-
        m-d') ."', '".$_POST["major_id"]."')";

        if ($conn->query($sql) == TRUE) {
            echo "Them sinh vien thanh cong";
            /*neu thuc hien thanh cong, chung ta se cho di chuyen 
            den taidulieu_bang.php*/
            header('Location: taidulieu_bang.php');
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>