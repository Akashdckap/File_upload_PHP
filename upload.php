<?php
require "connection.php";
$app= (new Database())->db;

$username = $_POST["username"];
$fileupload = $_FILES["file-upload"];


if($username != "" && isset($fileupload)){

    $userName = $_POST["username"];
    $uploadedFile = $_FILES["file-upload"];

    $filePath  = "images/".$uploadedFile["name"];

   move_uploaded_file($fileupload["tmp_name"],"$filePath");
//
   $app->query("INSERT INTO images_save(username,file_path)VALUES('$username','$filePath')");
   header("location: /");

}