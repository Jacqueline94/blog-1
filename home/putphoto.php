<?php
include("../admin/conn.php");
$sql = "select * from `photo`";
$res = $dbh->prepare($sql);
$res->execute();
$photos = $res->fetchAll(PDO::FETCH_ASSOC);
?>