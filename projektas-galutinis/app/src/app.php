<?php
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);




if (isset($vardas) && isset($email) && isset($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

      $from = "$email";
      $to = "vilniskaityte@gmail.com";
      $subject = "Nauja žinutė";
      $autorius = 'Nuo: ' . $vardas. ', ' . $email;
      $zinute = htmlspecialchars($message);
      mail($to, $subject, $autorius, $zinute, $from);
      header("Location:../../aciu.php");
  }

}

include('db.php');
