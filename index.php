<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet/less" type="text/css" href="styles.less" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  </head>
  <body>

    <?php

    echo "<form id='form' method='post' enctype='multipart/form-data'>
      <textarea name='text' id='text'></textarea>
      <input type='file' name='file' id='file'>
      <button type='button' name='button' onclick='getForm()' id='goFile'>Отправить</button>
    </form>";
     ?>

    <script src="script.js"></script>
  </body>
</html>
