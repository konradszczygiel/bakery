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
<div id = "container">
	<div><a class='Admin' href="index.php">ADMIN</a>
	<a class='lista_ciast' href="lista_ciast_admin.php">LISTA CIAST</a>
	</DIV>
</div>>



<form  action="save_cake.php"  method="POST">

<input type="hidden" name="id_cake" value='<?php echo $cake_id;?>'

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
      <textarea name="receipe">


      	<?php  
        echo $cake[0]['receipe'] ;
        ?>

      </textarea>
    </div>
    <div class="col-md-6">
      <textarea name="ingredients">

      	<?php  
        echo $cake[0]['ingredients'] ;
        ?>
        
      </textarea>
    </div>
  </div> 

  <div class="row">
  	<div class="col-md-10">

			<input type="submit" class="save" name="Send"  value="save">
	</div>

	<div class="col-md-2">
		
			<input type="submit" class="delete"  name="delete"  value="delete">
		
	</div>
  </row>

</div>


</form>

