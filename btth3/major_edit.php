<!DOCTYPE HTML>
<html>
<style>
    form div{
        display: flex;
        width: 300px;
    }
    form span{
        width: 35%;
    }
</style>
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
    $id = $_POST['id'];
    $sql = "select * FROM major WHERE major_id='".$id."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
<body>
    <form action="major_edit_save.php" method="post">
    <div> <span>ID:</span><input type="text" name="id" value="<?php echo $row['major_id'];?>"></div>
    <div> <span>Name major:</span><input type="text" name="major_name" value="<?php echo
    $row['major_name'];?>"></div>
    <input type="submit">
    </form>
</body>
</html>