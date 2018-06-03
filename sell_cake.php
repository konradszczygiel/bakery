<?php

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

//$cake

// $sql = "SELECT * FROM CAKES";

$id = $_GET['cake_id'];
$cake_amount = $_GET['cake_amount'];


$sql = 'SELECT pieces FROM CAKES WHERE id_cake = ' . $id;


$results = $mysqli->query($sql);

$data = $results->fetch_array(MYSQLI_ASSOC);

$no_pieces = $data['pieces'];

$no_pieces = $no_pieces - $cake_amount;


if ($no_pieces<=(-1))
	{

		header('location: pieces_error.php');
	}


$sql = 'UPDATE CAKES  SET pieces = ' . $no_pieces . ' WHERE id_cake =' . $id;
$status = $mysqli->query($sql);


if ($status)
{

	header ('location: index.php');
}


?>