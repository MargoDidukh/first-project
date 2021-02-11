<?php
include("header.php"); 

echo ' <div class= "for">
<h2>Форма</h2> 
<form action="form.php" method="post" accept-charset="UTF-8">
<p>Введите предложение:<br> 
<input type="text" name="sentence" /></p>
 <input type="submit" name="sendSent" value="Отправить">
</form>
</div>';


include("footer.php");
