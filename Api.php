<?php
require 'php/conn.php';

$sql="SELECT * FROM members";
$res=$conn->query($sql);
$data=$res->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($data);


?>
