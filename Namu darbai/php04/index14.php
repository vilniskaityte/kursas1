<?php
    $startYear = 2015;
    $currentYear = date('Y');

    if ($startYear < $currentYear) {
      echo '&copy;' . ' ' . $startYear . '-' . $currentYear;
    }

    elseif ($startYear >= $currentYear) {
      echo '&copy;' . ' ' . $currentYear;
    }

    else {
      echo '&copy;' . ' '. $currentYear;
    }

?>
