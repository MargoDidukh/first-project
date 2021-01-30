

<?php
include("header.php"); 
$numberFirst = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
function colorFun($x)
{
switch ($x) {

    case 1:
        $result = '#FF0000';
        break;
    case 2:
        $result = '#008000';
        break;
    case 3:
       $result = '#FFFF00';
        break;
    case 4:
        $result = '#0000FF';
        break;
    default:
     $result = '#000000';
}
    echo "<span style=\"color:$result;\">", $x , "</span>" ; //выводим окрашенный символ
}
function colorNumber($mult)
{
    $chars = preg_split('//', $mult, -1, PREG_SPLIT_NO_EMPTY); //разбиваем число на массив символов
    foreach ($chars as $value) {
       colorFun($value); // окрашиваем каждый символ
    }
   
  }  
 
 echo '<table class="tableBlack">
  <tbody>' ;
foreach ($numberFirst as &$value1) {
    if ($value1 == 1 || $value1 == 6) {
    	      echo ' <tr>';
    }
              echo ' <td>';
    foreach ($numberFirst as $value2) {

              $mult= (string)($value1 * $value2);   
              echo colorNumber($value1) , 'x' , colorNumber($value2) , '=' ,  colorNumber($mult) , '<br>';

           

    }
              echo '</td>';
    if ($value1 == 5 || $value1 == 10) {
    	      echo ' </tr>';
    }
}
              echo ' 
</tbody>
</table>';
 

include("footer.php");

  
?>


