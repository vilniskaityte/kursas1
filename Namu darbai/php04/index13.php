<?php
    class Zmogus {
       public $vardas;
       public $pavarde;



       public function labas() {
         return 'Labas' . " ". $this -> vardas . " ". $this -> pavarde . '<br>';
     }
  }

  $zmogus1 = new Zmogus();
  $zmogus2 = new Zmogus();

  $zmogus1 -> vardas = 'Petras';
  $zmogus1 -> pavarde = 'Petraitis';

  $zmogus2 -> vardas = 'Jonas';
  $zmogus2 -> pavarde = 'Jonaitis';
  

  echo $zmogus1 -> labas();
  echo $zmogus2 -> labas();

?>
