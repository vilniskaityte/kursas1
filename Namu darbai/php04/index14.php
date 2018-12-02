<?php
    $startYear = 2015;
    $currentYear = date('Y');

    echo '&copy;'. ' ' . $startYear;

    if ($startYear != $currentYear) {
      echo '-' . $currentYear;
    }
?>
