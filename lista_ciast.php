<?php 
include "header.html";

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$sql = "SELECT * FROM cake";

$results = $mysqli->query($sql);

$cakes = [];

while ( $row = $results->fetch_array(MYSQLI_ASSOC)) {

	$cakes[] = $row;

}

?>
 

 <form class="form" action = "save.php" method = "POST">
 	<table class = "table">

 		<tr>
 			<td>
 				Wybierz ciasto
 			</td>
 			<td>
 				<select name="cake_id">
 					<?php
 						foreach ($cakes as $cake_id => $cake) {
 							$option = '<option value="'.$cake['id'].'">'.$cake['name'].'</option>';
 							echo $option;
 						}
 					?>
 				</select>
 			</td>
 		</tr>

 		<tr>
 			<td>
 				numbers of pieces
 			</td>
 			<td>
 				<input class="form-control" type = "int" name = "pieces">
 			</td>

 		</tr>

 		<tr>
 			<td>
 				price
 			</td>
 			<td>
 				<input class="form-control" type = "int" name = "price">
 			</td>

 		</tr>

 	</table>

 	<input class="btn btn-info" type = "submit" value = "ADD CAKE">


 </form>