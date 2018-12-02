<?php
      if (isset($_POST['submit']). $_POST['vardas'] && $_POST['pavardė']) {

          echo ($_POST['vardas'] ." ". $_POST['pavardė']);
        exit();
      }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="<?php $_PHP_SELF; ?>" method="POST">
    vardas: <input type="text" name='vardas' required />
    pavardė: <input type="text" name='pavardė' required/>
      <input type="submit">
    </form>

  </body>
</html>
