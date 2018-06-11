<?PHP

$data = $_POST;



$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql= 'INSERT into product ( cake_id, pieces, price) values ( ' . $data['cake_id'] . ',' . $data['pieces'] . ',' . $data['price'] .' )';

$sql = sprintf('INSERT into product ( cake_id, pieces, price) values ( %d,%d,%d )', $data['cake_id'], $data['pieces'], $data['price']);



$status = $mysqli->query($sql);

if ($status)
{
	header ("Location: index.php");
} 

?>