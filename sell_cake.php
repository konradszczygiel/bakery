<?php

session_start();

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

//$cake

// $sql = "SELECT * FROM CAKES";

$id = $_GET['cake_id'];
$cake_amount = $_GET['cake_amount'];


$sql = 'SELECT pieces FROM product WHERE id = ' . $id;


$results = $mysqli->query($sql);

$data = $results->fetch_array(MYSQLI_ASSOC);

$no_pieces = $data['pieces'];

$no_pieces = $no_pieces - $cake_amount;

if ($no_pieces < 0 )
{
	$message = "You can not sell more cake than you have";
	
	$_SESSION['error_message'] = $message;

	header ('location: index.php');

} else {
	$sql = 'UPDATE product  SET pieces = ' . $no_pieces . ' WHERE id =' . $id;
	$status = $mysqli->query($sql);


	if ($status)
	{

		header ('location: index.php');
	}

}




?>