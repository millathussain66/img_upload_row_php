<?php
include_once "db.php";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="product_post.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <br>
        <input type="text" name="price">
        <br>
        <input type="file" name="img">
        <input type="submit" value="submit">
    </form>


</body>

</html>