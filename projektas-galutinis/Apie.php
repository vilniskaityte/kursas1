<!DOCTYPE html>
 <html>
   <head>

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
     <meta charset="UTF-8">
     <style media="screen">

          body{
            font-family:Georgia,sans-serif;
          }

          a{
            color: black !important;
          }

          .strong {
            font-weight: bold !important;
          }

          .box-center{
              background: #eeeeee ;
              padding: 20px;
              display: block;
              margin-left: auto;
              margin-right: auto;
              width:60%;
          }

          .pavadinimas{
              text-align: center;
          }


          #toggle{
              background-color: #a63b32;
              width: 180px;
              height: 45px;
              color: white;
              margin-left: 120px;
              display: block;
              margin-left: auto;
              margin-right: auto;
              text-align: center;

          }

          #toggle:hover{
              background-color: #cc493d;
            }

          #text{
              display: none;
            }

          ul.breadcrumb1 {
              padding: 10px 16px !important;
              list-style: none;
              background-color: #eee;
            }


          ul.breadcrumb1 li {
              display: inline;
              font-size: 14px;
            }


          ul.breadcrumb1 li+li:before {
              padding: 8px;
              color: black;
            }


          .breadcrumb1 a {
              color: black;
              text-decoration: none;
            }


          .breadcrumb1 a:hover {
              color: #a63b32 !important;
          }

    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>
   <body background="images/3.jpg">
     <?php
      include('header.php');
     ?>

     <ul class="breadcrumb1">
          <li><a href="index.php">Pagrindinis</a></li>
          <li><i class="material-icons">keyboard_arrow_right</i></li>
          <li><a href="apie.php">Apie biblioteką</a></li>
      </ul>


      <div class="row">
          <div class="col s12 m12 l12">
            <div class="box-center">
              <h5 class="pavadinimas">APIE BIBLIOTEKĄ</h5>
              <p><span class="strong">Bibliotekos misija –</span> visapusiškai tenkinti akademijos bendruomenės informacinius mokslo ir studijų poreikius.</p>
              <p><span class="strong">Bibliotekos vizija – </span>tapti informacijos ir kultūros traukos centru.</p>
              <p><span class="strong">Bibliotekos tikslai:</span></p>

              <p>-Užtikrinti akademijos prioritetinių mokslo ir studijų krypčių informacinį aprūpinimą;</p>
              <p>-Padaryti prieinamus vidinius ir išorinius informacijos resursus LMTA bendruomenei;</p>
              <p>-Tapti aktyvia studijų proceso dalyve.</p>


              <h5 class="pavadinimas">BIBLIOTEKA SKAIČIAIS</h5>
              <p>– Bibliotekos informacijos išteklių fondas kaupiamas pagal Lietuvos muzikos ir teatro akademijos studijų ir mokslo kryptis, atsižvelgiant į akademinės bendruomenės poreikius, tyrėjų, dėstytojų, doktorantų pageidavimus ir katedrų rekomendacijas, studijų programų kaitą. Bibliotekoje kaupiami specializuoti menotyros ir meno ištekliai, dėstytojų, tyrėjų ir studentų darbai. Iš viso bibliotekos fonde sukaupta daugiau nei 233 tūkst. tradicinių dokumentų iš kurių apie 118 tūkst. sudaro natų fondas, apie 31 tūkst. garso ir vaizdo įrašų fondas. Tai sudaro virš 2 300 metrų lentynų. Kasmet fondas papildomas apie 1 500 vnt. dokumentų.</p>
              <p>– Visi bibliotekos procesai (komplektavimas, katalogavimas, vartotojų aptarnavimas, informacijos paieška, statistika) automatizuoti. Nuo 2000 metų veikia integrali bibliotekos informacijos sistema ALEPH 500. Bibliotekos elektroniniame kataloge atsispindi bibliotekos įsigyti ir saugomi/prieinami dokumentai. Vartotojai per savo paskyrą gali valdyti leidinių užsakymus, leidinių grąžinimo terminus, gauti informaciją apie susikaupusius delspinigius.</p>
              <span id="text">– Akademijos bendruomenė turi prieigą prie 19 mokslinės informacijos licencijuojamų duomenų bazių, kuriose gali skaityti daugiau nei 15 tūkst. pavadinimų periodinių leidinių (el. žurnalų, el. konferencijų medžiagų ir kt. el. dokumentų), klausyti virš 2 mln. garso įrašų.</p>
              <p>– Nuo 2014 metų Akademijos mokslinių publikacijų duomenų bazėje (PDB) kaupiamos akademijos darbuotojų mokslo ir meninių tyrimų publikacijos, užtikrinama jų paieška, prieiga prie jų.</p>
              <p>– Nuo 2018 metų Akademijos magistrantūros baigiamųjų darbų, daktaro disertacijų ir jų santraukų elektroninių dokumentų (ETD) informacijos sistemoje kaupiami magistrantūros darbų, daktaro disertacijų ir jų santraukų aprašai, užtikrinama jų paieška ir prieiga prie jų.</p>
              <p>– Virtuali biblioteka (LMTA PRIMO) yra integrali paieškos sistema (pagrįsta vieno langelio principu), leidžianti vienu metu ieškoti informacijos LMTA bibliotekos kataloge, duomenų bazėse, atviros prieigos talpyklose ir archyvuose.</p>

              <p>– LMTA bibliotekos plotas – apie 1292 kv. m.</p>
              <p>– Bibliotekos paslaugomis naudojasi daugiau nei 1700 vartotojų. Jie aptarnaujami 3 bibliotekos padaliniuose su įrengtomis 36 darbo vietomis, 25 kompiuterizuotomis darbo vietomis.</p>
              <p>– Per metus bibliotekoje apsilanko apie 20 tūkst. vartotojų, vidutiniškai išduodama virš 90 tūkst. leidinių.</p>
              <p>– Nuo 2018 m. liepos 1d. prie LMTA prijungtas Klaipėdos menų fakultetas.</p>
              <p>– Biblioteka nuolatos rengia mokymus, konsultacijas, parodas.</p>
              <p>– Biblioteka dalyvauja projektuose, programose, įvairių organizacijų veikloje.</p></span>

            <div class="btn-container">
            <button class="btn" id="toggle">SKAITYTI DAUGIAU</button>
            </div>
          </div>
        </div>
      </div>
      <?php
       include('footer.php');
      ?>

      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">

         $(document).ready(function() {

           $("#toggle").click(function() {
             var elem = $("#toggle").text();
             if (elem == "SKAITYTI DAUGIAU") {

               $("#toggle").text("SKAITYTI MAŽIAU");
               $("#text").slideDown();
            }

            else {

               $("#toggle").text("SKAITYTI DAUGIAU");
               $("#text").slideUp();
           }
         });
       });


     </script>
   </body>
</html>
