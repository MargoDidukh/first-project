<?php
include("header.php"); 
if (isset($_POST['sentence'])) {
    function mb_strrev($str){
        $reverse = '';
        for ($i = mb_strlen($str); $i>=0; $i--) {
            $reverse .= mb_substr($str, $i, 1);
      
        }
        return $reverse;

    }

    echo mb_strrev($_POST['sentence']);
    echo '<a class="back" href="formHtml.php" onclick="history.back();">Вернуться назад</a>';
}
include("footer.php");