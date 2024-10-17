<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_FILES['fileData']) && $_FILES['fileData']['error'] == 0) {
        $target_file = basename($_FILES["fileData"]["name"]);
    } else {
        echo "No file uploaded or there was an upload error.";
    }    
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (isset($_POST["submit"])) {
        if ($FileType == "csv") {
            echo "File is an excel file";
            $uploadOk = 1;
        } else {
            echo "File is not an excel file.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileData"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileData"]["name"])) 
            . " has beenuploaded.";
            echo '<br>';
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

            $fileex = file($target_file, FILE_IGNORE_NEW_LINES);
            foreach ($fileex as $key => $value) {
                $csv[$key] = str_getcsv($value);
            }

            echo '<pre>';
            print_r($csv);
            echo '</pre>';

            foreach ($csv as $item){
                $sql = "insert into customers (id,fullname, email, birthday, password)
                 values ('".$item[0]."','".$item[1]."','".$item[2]."','".$item[3]
                 ."','".$item[4]."')";
                if ($conn->query($sql) == TRUE) {
                    echo "Them thanh cong";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            
            $conn->close();
        } 
    }
    ?>
</body>
</html>