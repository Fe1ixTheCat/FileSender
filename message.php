<?php
 $txt = fopen("text.txt", "w");
 $text = array_key_first($_POST);
 $createText = fwrite($txt, $text);
 fclose($txt);


 echo "txt was created";
 ?>
