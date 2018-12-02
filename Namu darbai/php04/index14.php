<?php

function dabartiniaiMetai() {

    $startYear = 2015;
    $currentYear = date('Y');

    if ($startYear < $currentYear) {
      echo '&copy;' . ' ' . $startYear . '-' . $currentYear;
    }
      else {
        echo '&copy;' . ' '. $currentYear;
    }
}
echo dabartiniaiMetai();


?>
