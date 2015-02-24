<meta charset="UTF-8">
<?php
include("../admin/conn.php");
$picture = 'image/'.$_FILES['myfile']['name'];
move_uploaded_file($_FILES['myfile']['tmp_name'] , $picture);
@$username = $_COOKIE[username];
echo"$username";
echo"$picture";
$sql = "insert into `photo`(username,iamge) 
values('$username','$picture')";
$res = $dbh->prepare($sql);
$res->execute();
    echo'<script language = "javascript">';
    echo'alert("上传成功")';
	echo'</script>';
    echo"<script language=\"javascript\">
	location.href='album.php';</script>";
?>