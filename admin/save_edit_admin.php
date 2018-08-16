<?PHP



$data = $_GET;



$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$sql= 'UPDATE  cake 
SET ( name=' . $data['name'] . ', suggested_price=' . $data['suggested_price'] . ', receipe=' . $data['receipe'] .', ingredients=' . $data['ingredients'] .')
WHERE id=. $data['id'] .';

$sql = sprintf('UPDATE  cakes SET ( name, suggested_price, receipe, ingredients) values ( %d,%d,%d,%d )', $data['name'], $data['suggested_price'], $data['receipe'], $data['ingredients']);



$status = $mysqli->query($sql);
var_dump($status);
die;

	if ($status)
	{

		header ('location: lista_ciast_admin.php');
	}


?>