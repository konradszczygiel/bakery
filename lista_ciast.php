<?php 
include "header.html";

 ?>
 

 <form class="form" action = "save.php" method = "POST">
 	<table class = "table">

 		<tr>
 			<td>
 				name
 			</td>
 			<td>
 				<input class="form-control" type ="text" name = "name">
 			</td>
 		</tr>

 		<tr>
 			<td>
 				numbers of pieces
 			</td>
 			<td>
 				<input class="form-control" type = "int" name = "number">
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