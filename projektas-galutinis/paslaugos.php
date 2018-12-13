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
               color:black !important ;
          }

          .strong {
                font-weight: bold !important;
          }

          .pavadinimas {
                text-align: center;
           }


          .dokumentai{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                margin-top: 50px;
                margin-bottom: 50px;
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
          .accordion{
              height: 60px;
              background-color: #ddd;
              display: table;
              padding-left: 20px;
              cursor: pointer;
              width: 50%;
              margin-top:20px;
              margin-bottom: 20px;
              margin:5px;
              margin-left: auto;
              margin-right: auto;
          }

          h6{
            display:table-cell;
            vertical-align:middle;
          }

          .content{
              display: table;
              float: none;
              padding: 20px;
              background-color: #eeeeee;
              line-height: 27px;
              display: none;
              margin-left: auto;
              margin-right: auto;
              width: 50%;
          }

          .dokumentai a{
            color: #a63b32 !important;

          }

          .content a{
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
          <li><a href="paslaugos.php">Paslaugos</a></li>
      </ul>

       <div class="mainAccordion">
     			<div class="accordion">
     				<h6>LEIDINIŲ SKOLINIMAS<h6>
     			</div>
     			<div class="content">
            <p>Leidinių paieška atliekama LMTA bibliotekos kataloge. Naudotis el. katalogu galima iš bet kurios kompiuterizuotos darbo vietos, turinčios prieigą prie interneto.</p>
            <p>Skaitytojai bibliotekoje aptarnaujami su Lietuvos studento pažymėjimu (LSP), ISIC, ar asmens tapatybės kortele. Leidiniai į namus skolinami laikotarpiui nuo 1 savaitės iki semestro. Bibliotekos fonde leidiniai pažymėti geltonu lipduku į namus neišduodami, jie skaitomi tik skaityklos fonde. Pasibaigus žiemos egzaminų sesijai, visi leidinius privalo būti grąžinti iki vasario 1 d. Pasibaigus pavasario egzaminų sesijai – iki liepos 1 d.</p>
            <p>Laiku negrąžinę išduotų leidinių skaitytojai už kiekvieną uždelstą dieną kiekvienam negrąžintam leidiniui privalo sumokėti delspinigius:
            <p><span class="strong">0,03 EUR –</span> jei leidinys buvo išduotas ilgesniam nei mėnuo terminui;</p>
            <p><span class="strong">0,29 EUR –</span>jei leidinys buvo išduotas trumpesniam nei mėnesio laikotarpiui.</p>
            <p>Kitų universitetų studentai gali lankytis skaityklose bei naudotis atviro fondo leidiniais, tačiau į namus leidiniai nėra išduodami.<p>
     			</div>
     			<div class="accordion">
     				<h6>KOPIJAVIMAS, SKENAVIMAS, SPAUSDINIMAS<h6>
     			</div>
     			<div class="content">
            <p>LMTA įdiegta nauja nuotolinė spausdinimo ir kopijavimo sistema myQ. Parsisiųskite Naudojimosi instrukciją.</p>
            <p>Spausdinimo adresas: <a href="http://print.lmta.lt" target="_blank">print.lmta.lt</a></p>
            <p>Bibliotekos teikiamų paslaugų kainoraštis</p>
              <table>
                <tr>
                  <th>Paslaugos pavadinimas</th>
                  <th>Kaina (€ / vnt.)</th>
                </tr>
                <tr>
                  <td>Kopijavimas</td>
                  <td>A4 – 0,03 €</td>
                  <td>A3 – 0,06 €</td>
                </tr>
                <tr>
                  <td>Spausdinimas (nespalvotas)</td>
                  <td>A4 – 0,06 €</td>
                  <td>A3 – 0,12 €</td>
                </tr>
                <tr>
                  <td>Spausdinimas spalvotas</td>
                  <td>A4 – 0,40 €</td>
                  <td>A4 – 0,80 €</td>
                </tr>
                <tr>
                  <td>Spausdinimas spalvotas</td>
                  <td>A4 – 0,40 €</td>
                  <td>A4 – 0,80 €</td>
                </tr>
              </table>
     			</div>
     			<div class="accordion">
     				<h6>TARPBIBLIOTEKINIS ABOMENENTAS<h6>
     			</div>
     			<div class="content">
            <p>Neradęs reikiamo dokumento LMTA bibliotekos fonduose, vartotojas gali užsisakyti leidinius arba straipsnių kopijas iš kitų Lietuvos bibliotekų.</p>
          <p><span class="strong">Dokumentų užsakymo tvarka:</span><p>
          <p>– Pateikite dokumentų ar straipsnių bibliografinius aprašus;
          <p>– Iš periodinių dokumentų užsakyti galima tik straipsnių kopijas (už leidinių ir straipsnių kopijas vartotojas moka pagal bibliotekoje patvirtintus mokamų paslaugų įkainius);</p>
          <p>– Enciklopedijų, žinynų, žodynų , bibliografinių rodyklių bibliotekos neskolina;</p>
          <p>– Pirmą kartą vartotojas TBA užklausą turi pateikti bibliotekoje, pakartotinus užsakymus gali siųsti el. paštu.</p>
          <p>– LMTA biblioteka per tarpbibliotekinį abonementą skolina dokumentus kitoms Lietuvos bibliotekoms.</p>
     			</div>
          <div class="accordion">
            <h6>MOKYMAI IR KONSULTACIJOS<h6>
          </div>
          <div class="content">
            <p>LMTA biblioteka organizuoja mokymus vartotojams, siekdama supažindinti juos su bibliotekos teikiamomis paslaugomis. Mokymai „LMTA bibliotekos paslaugos“ pirmo kurso studentams vyksta rugsėjo-spalio mėn. pagal iš anksto suderintą laiką. Mokymai „Informacijos paieška duomenų bazėse“ ir „Baigiamųjų darbų įkėlimas į eLABą“ vyksta pagal iš anksto suderintą grafiką.</p>
            <p>Už teminius mokymus ir konsultacijas atsakinga bibliotekos darbuotoja Julija Vilniškaitytė (el. paštas julija.vilniskaityte@lmta.lt ; tel. (8-5) 261 3841)</p>
          </div>
          <div class="accordion">
     				<h6>INTERNETO PASLAUGOS<h6>
     			</div>
     			<div class="content">
            <p>Visose bibliotekos skaityklose įrengtos kompiuterizuotos darbo vietos su interneto prieiga. Prie kompiuterių LMTA bendruomenės nariai jungiasi vieningu vartotojo vardu ir slaptažodžiu:</p>
            <p><span class="strong">vardas:</span> Jūsų LMTA sistemos prisijungimo vardas (LMTA el. paštas)</p>
            <p><span class="strong">slaptažodis:</span> Jūsų LMTA sistemos slaptažodis (LMTA el. pašto slaptažodis)</p>
            <p>Taip pat bibliotekoje veikia bevielis interneto ryšys.</p>
     			</div>
     		</div>


        <div class="dokumentai">
          <table class="striped">
            <h5 class="pavadinimas">PAGALBA BIBLIOTEKOS SKAITYTOJUI</h5>
              <tbody>
                <tr>
                     <td><i class="small material-icons">picture_as_pdf</i></td>
                     <td>Naudojimosi biblioteka taisyklės</td>
                     <td><a href="https://lmta.lt/wp-content/uploads/2017/09/nudojimosibibliotekataisykl20170904-003-00000002.pdf" target="_blank">Atsisiųsti</td>
                 </tr>
                 <tr>
                     <td><i class=" small material-icons">picture_as_pdf</i></td>
                     <td>Bibliotekos pradžiamokslis pirmakursiams</td>
                     <td><a href="https://lmta.lt/wp-content/uploads/2018/07/Pradžiamokslis-2018-11.pdf" target="_blank">Atsisiųsti</td>
                 </tr>
                 <tr>
                     <td><i class="small material-icons">picture_as_pdf</i></td>
                     <td>Naudojimosi duomenų bazėmis instrukcija</td>
                     <td><a href="https://lmta.lt/wp-content/uploads/2018/07/duomenų-bazės-mokymai.pdf" target="_blank">Atsisiųsti</td>
                 </tr>
                 <tr>
                     <td><i class="small material-icons">picture_as_pdf</i></td>
                     <td>Naudojimosi bibliotekos el. katalogu instrukcija</td>
                     <td><a href="https://lmta.lt/wp-content/uploads/2018/07/Naudojimosi-bibliotekos-el.-katalogu-instrukcija.pdf" target="_blank"></i>Atsisiųsti</td>
               </tr>
           </tbody>
         </table>
       </div>


       <?php
        include('footer.php');
       ?>



      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">


            $(function(){
              $('.mainAccordion .accordion').on('click', function(){

                $(this).next('.content', this).slideToggle().siblings('.content').slideUp();

                $(this).find('i').toggleClass('fa-minus').end().siblings('.accordion').find('i').removeClass('fa-minus');
              });
            });

      </script>
    </body>
  </html>
