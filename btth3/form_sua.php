<!DOCTYPE HTML>
<html>
<style>
    form div{
        display: flex;
        width: 300px;
    }
    form span{
        width: 25%;
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
    $sql = "select * FROM student WHERE ID='".$id."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
<body>
    <?php print_r($row)?>
    <form action="sua.php" method="post">
    <div> <span>ID:</span><input type="text" name="id" value="<?php echo $row['id'];?>"></div>
    <div> <span>Name:</span><input type="text" name="fullname" value="<?php echo
    $row['fullname'];?>"></div>
    <div> <span>E-mail:</span> <input type="text" name="email" value="<?php echo
    $row['email'];?>"></div>
    <div> <span>Major ID </span><input type="text" name="major_id" value="<?php echo
    $row['major_id'];?>"></div>
    <div> <span>Birthday:</span> <input type="date" name="birth" value="<?php echo
    $row['Birthday'];?>"></div>
    <input type="submit">
    </form>
</body>
</html>