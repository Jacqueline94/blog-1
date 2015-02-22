<meta charset="UTF-8">
<?php
include("conn.php");
$comment = $_POST["comment"];
@$username = $_COOKIE[username];
if($comment == NULL)
{
    echo'<script language = "javascript">';
    echo'alert("评论不能为空")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../home/homepage.php';</script>";
}
else
{
    $sql = "insert into `comment` (username,comment) values('$username','$comment')";
    $res = $dbh->prepare($sql);
    $res->execute();
    echo'<script language = "javascript">';
    echo'alert("发表成功！")';
	echo'</script>';
	echo"<script language=\"javascript\">
	location.href='../home/homepage.php';</script>";
}
?>