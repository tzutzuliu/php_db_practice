<?php
//增加刪除單筆資料的功能
$id=$_GET['id'];
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="DELETE FROM `students` WHERE `id`='$id'";

$pdo->exec($sql);

header("location:index.php");

?>