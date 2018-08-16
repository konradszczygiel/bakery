<?php
echo "witaj swiecie";
?>


$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$sql= 'INSERT into cakes ( name, suggested_price, receipe, ingredients) values ( ' . $data['name'] . ',' . $data['suggested_price'] . ',' . $data['receipe'] .',' . $data['ingredients'] .')';

$sql = sprintf('INSERT into cakes ( name, suggested_price, receipe, ingredients) values ( %d,%d,%d,%d )', $data['name'], $data['suggested_price'], $data['receipe'], $data['ingredients']);



$status = $mysqli->query($sql);


	if ($status)
	{

		header ('location: lista_ciast_admin.php');
	}