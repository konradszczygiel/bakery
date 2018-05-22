<?PHP


$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');
$sql= 'INSERT into CAKES (name, pieces, value) values ( "' . $_POST[name] . '",' . $_POST[number] . ',' . $_POST[price] .' )';


$status = $mysqli->query($sql);

if ($status)
{
	header ("Location: index.php");
} 

?>