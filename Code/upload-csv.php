<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        border: 2px solid #000;
        width: 35%;
        padding: 20px;
    }
    form > *{
        margin-bottom: 10px;
    }
</style>
<body>
    <form action="upload-csv-processing.php" method="post" enctype="multipart/form-data">
        <h2>Up FILE</h1>
        <input type="file" name="fileData" id="fileData">
        <input type="submit" name="submit">
    </form>
</body>
</html>