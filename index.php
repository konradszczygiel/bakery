<?php 
include "header.html";

$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$sql = "SELECT * FROM CAKES";

$results = $mysqli->query($sql);


if (!$results)
{
  echo "we have problem with danload list of your cakes list";
}


$outprint = '';


$header = '
  <table class="table">
    <tr>
      <th>cakes name</th>
      <th>what left</th>
      <th>price</th>
      <th>How many pieces you sell </th>
    <th>Delete</th>
    </tr>';


$body = '';



while ($data = $results->fetch_array(MYSQLI_ASSOC) ) {

$select = '
<form action="action_page.php" id="carform">
   
    <select name="carlist" form="carform" class="cake_selector" data-id="'.$data['id_cake'].'">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </form>';

  $body .= '<tr>
    <td>' . $data['name'] . '</td>
    <td>' . $data['pieces'] . '</td>
    <td class="value">' . $data['value'] . '</td>
     <td>' . $select . '</td>
     <td> <a class="delete_link" href="delete.php?id_cake='.$data['id_cake'].'">X</a> </td>

       </tr>';
   }




  $footer = '

  </table>
';

$output = $header . $body .  $footer;


echo $output;



  include "footer.html";

?>