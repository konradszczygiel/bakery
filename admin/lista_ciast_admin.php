<?php

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql = "SELECT * FROM cake";

$results = $mysqli->query($sql);



$cakes = [];

while ( $row = $results->fetch_array(MYSQLI_ASSOC)) {

	$cakes[] = $row;


}




$outprint = '';

$header = '
  <table class="table">
    <tr>
      <th>cakes name</th>
      <th>sugeredprice</th>
      </tr>';



?>
<table class="table">


<tr>
	<td>
		<?php
			echo "$cakes[name]";
		?>
	</td>

	<td>
		<?php
			echo $cakes[sugested_price];
		?>
	</td>
</tr>


</table>

