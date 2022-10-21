<?php

require_once "db.php";


$name = $_POST['name'];
$price = $_POST['price'];


$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "./image/" . $filename;



$insert = "INSERT INTO problem(name, price, img) VALUES ('$name','$price','$filename')";

mysqli_query($db_conn, $insert);


if (move_uploaded_file($tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}
