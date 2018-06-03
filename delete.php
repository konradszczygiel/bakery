<?php
$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql = 'DELETE FROM CAKES WHERE id_cake= '. $GET['id_cake'] . '';
$status = $mysqli->query($sql);
var_dump($status);
if ($status)
{
	header ("Location: index.php");
} 
?>