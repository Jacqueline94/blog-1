<meta charset="UTF-8">
<?php
$dsn = 'mysql:host=localhost;dbname=blog';
$passwd = '';
$username = 'root';
$dbh = new PDO($dsn,$username,$passwd);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');
?>