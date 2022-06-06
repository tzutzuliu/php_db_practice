<?php
//簡化登入寫法
//檢查帳密是否正確 
include "connect.php";
$acc=$_POST['acc'];
$pw=$_POST['pw'];

/* if($acc==資料表中的acc && $pw==資料表中的pw){
    //登入成功->會員中心
}else{
    //登入失敗->回到登入頁->顯示錯誤訊息
}
 */

$sql="SELECT count(*) FROM `users` WHERE `acc`='$acc' && `pw`='$pw'";

 //$user=$pdo->query($sql)->fetch();
$chk=$pdo->query($sql)->fetchColumn();

//if($acc==$user['acc'] && $pw==$user['pw']){
if($chk){
    //如果有要用到session的地方記得用session_star()
    //session在tmp檔裡面也看得到資料,但也可以存在資料庫或存在資料夾
    $_SESSION['user']=$acc;
    header("location:member_center.php");
}else{
    header("location:login.php?error=帳號或密碼錯誤");
}
?>