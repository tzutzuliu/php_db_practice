<?php
//密碼欄位增加md5編碼
include_once "connect.php";
$acc=$_POST['acc'];
$pw=md5($_POST['pw']);

$sql="INSERT INTO `users` (`acc`,`pw`,`birthday`,`passnote`,`email`) 
                    values('{$_POST['acc']}','$pw','{$_POST['birthday']}','{$_POST['passnote']}','{$_POST['email']}');";

$pdo->exec($sql);

header('location:login.php');

?>674f3c2c1a8a