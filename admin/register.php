<?php 
include("conn.php");
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$sql = "SELECT * FROM `user` WHERE email = '$email'";
$res = $dbh->prepare($sql);
$res->execute();
if($allname = $res->fetchAll(PDO::FETCH_ASSOC))
{
	echo'<script language = "javascript">';
    echo'alert("该邮箱已完成注册")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../home/register.html';</script>";
}
else{
$sql = "insert into `user`(email,password,name) 
values('$email','$password','$name')";
$res = $dbh->prepare($sql);
$res->execute();
	echo'<script language = "javascript">';
    echo'alert("注册完成！")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../index.php';</script>";
}
