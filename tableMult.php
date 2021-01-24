
<?php 
$numberFirst = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

 echo '<table class="tableMult">
  <tbody>' ;
foreach ($numberFirst as &$value1) {
    if($value1 == 1 || $value1 == 6){
    	 echo ' <tr>';
    }
    echo ' <td>';
    foreach ($numberFirst as $value2) {

       echo $value1 . ' x ' . $value2 . ' = ' . $value1 * $value2 . '<br>';

    }
    echo '</td>';
    if($value1 == 5 || $value1 == 10){
    	 echo ' </tr>';
    }
}
echo ' 
</tbody>
</table>';
 

  
?>


