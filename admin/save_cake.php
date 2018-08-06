<?php

$data = $_POST;

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql = sprintf('UPDATE cake SET receipe = "%s" , ingredients = "%s" WHERE id = %d', $data['receipe'], $data['ingredients'], $data['id_cake']);



$status = $mysqli->query($sql);

if ($status)
{
	header ("Location: cake.php?cake_id=1");
} 

?>


