<!DOCTYPE html>
<html>
<head>
	<title>U cioci ciasta</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/script.js"></script>
	<!-- link rel="stylesheet" type="text/css" href="css/u_cioci.css">  -->
</head>
<body>





<?php 
$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');


$cake_id = $_GET['cake_id'];
 
$sql = "SELECT name, suggested_price, receipe, ingredients FROM cake WHERE id = $cake_id";

$results = $mysqli->query($sql);

$cake = [];

while ( $row = $results->fetch_array(MYSQLI_ASSOC)) {

	$cake[] = $row;

}




?>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <button class="btn btn-outline-success" type="button">Admin</button>
    <button class="btn btn-sm btn-outline-secondary" type="button">Lista ciast</button>
  </form>
</nav>



<div class="container">
  <div class="row">
    <div class="col-md-6">
      <span class="name">

      	<?php  
        echo $cake[0]['name'] ;
        ?>

    </span>
    </div>
    <div class="col-md-6">
      <span class="price">

      <?php
      	echo '£' . $cake[0]['suggested_price'];
        ?>

    </span>
    </div>
  </div>
   <div class="row">
    <div class="col-md-6">
      <textarea>


      	<?php  
        echo $cake[0]['receipe'] ;
        ?>

      </textarea>
    </div>
    <div class="col-md-6">
      <textarea>

      	<?php  
        echo $cake[0]['ingredients'] ;
        ?>
        
      </textarea>
    </div>
  </div>
</div>
