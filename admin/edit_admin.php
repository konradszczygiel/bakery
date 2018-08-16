<?php

session_start();

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');


$id = $_GET['id'];
$cake_amount = $_GET['cake_amount'];


$sql = 'SELECT * FROM cake WHERE id = ' . $id;

$results = $mysqli->query($sql);

$cakes = [];
$cake = $results->fetch_array(MYSQLI_ASSOC);

$outprint = '';

$outprint = '

  <table class="table">
    <tr>
      <th>cakes name</th>
      <th>sugered price</th>
      <th>receipe</th>
      <th>ingredients</th>
     </tr>;


     	<tr>

			<td>
							
				 '. $cake['name'] .'
				
			</td>
			<td>
			<input type="text" name="suggested_price" value= "' .$cake['suggested_price'] .'"></input>	
				 
			</td>
			
			<td>
			<textarea type="text" name="receipe"> ' .$cake['receipe'] .'</textarea>
			
			</td>
			
			<td>
			<textarea type="text" name="ingredients">' .$cake['ingredients'] .'</textarea>
			
			
			</td>

		</tr>;


	</table>' ;


echo $outprint;

$link = sprintf('<a class="save_edit_admin" href="save_edit_admin.php?cake_id=%d">SAVE ALL</a>', $cake['id']);

echo $link;


?>