<?php
  $cities3 = [

    'Tokijas' => [13.6, 1868, 'Japonija'],
    'Vasingtonas' => [0.6, 1790, 'JAV'],
    'Maskva' => [11.5, 1147, 'Rusija']
];

  $cities3['Londonas'] = [8.6, 43, 'Anglija'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      <li> Gyventojų skaičius: <?php echo $cities3['Londonas'][0] . ' ' . 'mln.';  ?></li>
      <li> Įkurtas: <?php echo $cities3['Londonas'][1] . ' '. 'm';  ?></li>
      <li> Šalis: <?php echo $cities3['Londonas'][2];  ?></li>
    </ul>
  </body>
</html>
