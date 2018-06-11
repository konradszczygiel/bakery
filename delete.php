<?php
$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$data = $_GET;

$cake_id = $_GET['cake_id'];

$sql = sprintf('DELETE FROM product WHERE id = %d', $cake_id);

$status = $mysqli->query($sql);


if ($status)
{
	header ("Location: index.php");
} 
?>
