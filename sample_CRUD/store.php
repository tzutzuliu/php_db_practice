<?php

//newPDO須大寫
//第一個參數是我們對資料庫的設定
//第二個參數是使用者名稱
//第三個參數是使用者密碼

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'root','');

$sql="INSERT INTO `students` (`uni_id`, `seat_num`, `name`, `birthday`, `national_id`, `address`, `parent`, `telephone`, `major`, `secondary`) 
                       values( '{$_POST['uni_id']}', '{$_POST['seat_num']}', '{$_POST['name']}', '{$_POST['birthday']}', '{$_POST['national_id']}', '{$_POST['address']}', '{$_POST['parent']}', '{$_POST['telephone']}', '{$_POST['major']}', '{$_POST['secondary']}')";
//echo $sql;
$pdo->query($sql);
//有寫入資料在這裡其實就下方就不用再敘述顯示

header("location:index_pra.php");

?>