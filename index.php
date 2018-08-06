<?php 

include "header.html";


$mysqli = new mysqli('127.0.0.1' , 'root' , '0022' , 'BYKERY');

$sql = "SELECT cake.id as cake_id, product.id as product_id, product.pieces, product.price, cake.name FROM product
JOIN cake  ON cake.id = product.cake_id";


$results = $mysqli->query($sql);

if ( isset($_SESSION['error_message'])) {
  echo $_SESSION['error_message'];
  unset($_SESSION['error_message']);
}

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
   
    <select name="carlist" form="carform" class="cake_selector" data-id="'.$data['product_id'].'">
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
    <td class="value">' . $data['price'] . '</td>
     <td>' . $select . '</td>
     <td> <a class="delete_link" href="delete.php?cake_id='.$data['product_id'].'">X</a> </td>

       </tr>';
   }




  $footer = '

  </table>
';

$output = $header . $body .  $footer;


echo $output;



  include "footer.html";

?>