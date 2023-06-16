<html>
    <head>
        <title>
            file upload
        </title>
    </head>
    <body>
        <form action="./upload.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="username" name="username">
            <input type="file" placeholder="fileupload" name="file-upload">
            <input type="submit" value="upload">
        </form>
    </body>
</html>

<?php

require "connection.php";
$app= (new Database())->db;

$get = $app->query("SELECT * FROM images_save");

$get = $get->fetchAll();

foreach ($get as $gets){
    ?>
    <h2><?php echo $gets["username"]?></h2>
    <img src="<?php echo $gets["file_path"]?>">
    <?php
}


