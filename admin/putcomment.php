<?php
include("conn.php");
$sql = "select * from `comment`";
$res = $dbh->prepare($sql);
$res->execute();
$allcomment = $res->fetchAll(PDO::FETCH_ASSOC);
?>