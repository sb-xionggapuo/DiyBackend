<?php
//获取文件名
$name = $_POST["name"];
//获取大小
$extions = strrchr($name,".");
$name=md5($name).$extions;
$size = $_POST["size"];
//获取文件类型
$type= $_POST["type"];
//获取文件最后修改时间
$lastModifiedDate= $_POST["lastModifiedDate"];
//将上传的文件保存到指定目录下
move_uploaded_file($_FILES["file"]["tmp_name"],
    $_SERVER["DOCUMENT_ROOT"]."/uploadFiles/" .$name);
echo "/uploadFiles/".$name;die;