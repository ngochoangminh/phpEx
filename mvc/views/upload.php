<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
    <ul>
        <li style="margin-top:10px;"><input type="text" name="title"></li>
        <li style="margin-top:10px;"><input type="text" name="description"></li>
        <li style="margin-top:10px;"> <input type="file" name="Browser"></li>
        <li style="margin-top:10px;"><input type="boolval" name="status"></li>
        <li style="margin-top:10px;"><input type="submit"></li>
    </ul>
    </form>
    <?php
        if (isset($_FILES["image"])){
            $file_name =  $_FILES["image"]["name"];
            $file_type = $_FILE["iamge"]["type"];
            $tmp_name = $_FILE["iamge"]["tmp_name"];
            $file_size = $_FILE["iamge"]["size"];
            $ext = explode(".",$file_name);
            $file_ext = strtolower(end($ext));

            $arr_ext = array("jpg","jpeg");
            if(!in_array($file_ext, $arr_ext)){
                echo "Format invalid";
            }
            if($file_size>1048576){
                echo "file to big";
            }
            move_uploaded_file($tmp_name,"/public/images/".$file_name);
            $url_img = "/public/images/".$file_name;
        }
    ?>
    <?php 
    if($url_img){
        ?>
        <img src=<?php $url_img ?>>
        <?php
    }
    ?>
</body>
</html>