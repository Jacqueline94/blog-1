<?php
include("conn.php");
@$name = $_COOKIE[username];
$sql = "SELECT * FROM `message` WHERE getername='$name'";
$res = $dbh->prepare($sql);
$res->execute();
$allcomment = $res->fetchAll(PDO::FETCH_ASSOC);
?>