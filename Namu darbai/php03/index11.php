
<?php

    if (isset($_POST["submit"]) . is_numeric($_POST["ilgis"]) && is_numeric($_POST["plotis"])) {
             echo $_POST["ilgis"] * $_POST["plotis"];
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

     <form class="" action="<?php $_PHP_SELF; ?>" method="post">
       Stačiakampio ilgis:  <input type:"text" name="ilgis" required />
       Stačiakampio plotis: <input type:"text" name="plotis" required />
       <input type ="submit">
     </form>

   </body>
 </html>
