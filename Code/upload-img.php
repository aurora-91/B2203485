<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form div{
        margin-top: 10px;
    }
</style>
<body>
    <!-- modify:  thay đổi link action-->
    <form action="upload-csdl.php" method="post" enctype="multipart/form-data">
    Ban chon 1 anh de lam profile:
    <div><input type="file" name="fileToUpload" id="fileToUpload"></div>
    <div><input type="submit" value="Upload Image" name="submit"></div>
    </form>
</body>
</html>