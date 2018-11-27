<?php

$cities3 = [

  'tokijas' => [13.6, 1868, 'Japonija'],
  'vasingtonas' => [0.6, 1790, 'JAV'],
  'maskva' => [11.5, 1147, 'Rusija']
];

$metai = 1774;

  if($metai >= $cities3['vasingtonas'][1]){
    echo "Vašingtonas yra JAV sostinė";

} elseif ($metai == 1774) {
    echo "JAV sostinė vis dar Filadelfioje";
} else {
    echo 'Liko'. ($cities3['vasingtonas'][1] - $metai) .' metai(ų) iki Vašingtono įkurimo';
}


?>
