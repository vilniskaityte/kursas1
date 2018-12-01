&copy;
<?php
  echo date ('Y');
?>

<br>

<?php

 $date = 2015;
 $dabar = date('Y');

 	if($date < $dabar) {
   	  echo '&copy;' . ' '. $date . ' - '.  $dabar ;
 	}

  else {
 		echo '&copy;' . ' ' . $dabar;
 	}

 ?>
