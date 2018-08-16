<?php

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql = "SELECT * FROM cake";

$results = $mysqli->query($sql);



if (!$results)
{
        echo "we have problem with danload list of your direct debit manager list";
}


$cakes = [];


$outprint = '';

$header = '
  <table class="table">
    <tr>
      <th>cakes name</th>
      <th>sugered price</th>
      <th>edit</th>
      <th>delete</th>
     </tr>';



$body = '';


while ($cakes = $results->fetch_array(MYSQLI_ASSOC)) {

	$body .='
			<td>
				
				 '. $cakes['name'] .'
				
			</td>

			<td>
				
				 ' .$cakes['suggested_price'] .'
				
			</td>
			
			<td>
			<a class="edit_link" href="edit_admin.php?id='.$cakes['id'].'">EDIT</a>
			</td>
			
			<td>
			<a class="delete_link" href="delete_admin.php?id='.$cakes['id'].'"> X </a>
			</td>

		</tr>';

}


$footer ='
	</table> ';




$output = $header . $body .  $footer;


echo $output;

?>

<a class="ADD_CAKE" href="dodac_ciasto_admin.php"> ADD CAKE </a> 