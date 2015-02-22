<?php
include("conn.php");
$message = $_POST["message"];
@$sendername = $_COOKIE[username];
$getername = $_POST["username"];
$sql = "SELECT * FROM `user` WHERE name='$getername'";
$res = $dbh->prepare($sql);
$res->execute();
if($allname = $res->fetchAll(PDO::FETCH_ASSOC))
{
	if($message == NULL)
	{
       echo'<script language = "javascript">';
       echo'alert("留言不能为空")';
	   echo'</script>';
	   echo"<script language=\"javascript\">
	   location.href='../home/message-board.php';</script>";
	}
	else
	{
       $sql = "insert into `message` (sendername,getername,message) 
       values('$sendername','$getername','$message')";
       $res = $dbh->prepare($sql);
       $res->execute();
       echo'<script language = "javascript">';
       echo'alert("留言成功！")';
	   echo'</script>';
	   echo"<script language=\"javascript\">
	   location.href='../home/message-board.php';</script>";
	}
}
else
{
	echo'<script language = "javascript">';
    echo'alert("没有此好友")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../home/message-board.php';</script>";
}
?>