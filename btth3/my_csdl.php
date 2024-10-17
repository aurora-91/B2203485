<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'my_csdl';

    $conn = new mysqli($servername,$username,$password,$dbname);

    if ($conn->connect_error){
        die("Connect error: ".$conn->connect_error);
    }

    $sql = "select * from sanpham";
    $result = $conn->query($sql);
    
    echo "<h1>Bang san pham</h1>";
    echo "<table border='1'><tr><td>Ma sp</td><td>Ten sp</td><td>Don gia</td></tr>";

    foreach ($result->fetch_all(MYSQLI_NUM) as $row){
        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
    }

    echo "</table>";
    $conn->close()
    ?>
</body>
</html>