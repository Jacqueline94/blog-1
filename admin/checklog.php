<meta charset="UTF-8">
<?php
include("conn.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM `user` WHERE email='$email' AND password='$password'";
$res = $dbh->prepare($sql);
$res->execute();
if($allname = $res->fetchAll(PDO::FETCH_ASSOC))
{
	foreach ($allname as $key) 
	{
	    @$name = $key[name];
    }
	setcookie("username","$name",time()+3600,"/");
	echo"<script language=\"javascript\">
	location.href='../home/homepage.php';</script>";
}
else
{
	echo'<script language = "javascript">';
    echo'alert("邮箱或密码错误")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../index.php';</script>";
}
?>