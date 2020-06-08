<?php
      print_r($_FILES);
      echo $FILES;
      $uploadfile = "upload/".$_FILES['file']['name'];
      move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
?>
