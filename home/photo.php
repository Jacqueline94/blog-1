<meta charset="UTF-8">
<?php
include("../admin/conn.php");
echo $_FILES['myfile']['name'];
$picture = 'image/'.$_FILES['myfile']['name'];
move_uploaded_file($_FILES['myfile']['tmp_name'] , $picture);
echo $picture;  
@$username = $_COOKIE[username];
$sql = "insert into `photo`(username,iamge) 
values('$username','$picture')";
$res = $dbh->prepare($sql);
$res->execute();
echo"<script language=\"javascript\">
	location.href='photo.php';</script>";
?>