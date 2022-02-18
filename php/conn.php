<?php

date_default_timezone_set('Asia/Bangkok');

$db_host = 'localhost';
$db_name = 'database';
$db_user = 'root';
$db_pass = '';


try {
  
    $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);
    $conn ->exec("set names utf8");
   
}
catch (PDOException $e) {
    echo $e->getMessage();
}

?>