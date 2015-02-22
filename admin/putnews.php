<?php
include("conn.php");
$sql = "select * from `news`";
$res = $dbh->prepare($sql);
$res->execute();
$news = $res->fetchAll(PDO::FETCH_ASSOC);
?>