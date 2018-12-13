<!DOCTYPE html>
 <html>
   <head>

      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link rel="stylesheet" href="css/1owl.carousel.min.css">
      <script type="text/javascript" src="js/jquery-3.3.1.js"></script>


    <style media="screen">

      body{
        font-family:Georgia,sans-serif;
      }

      a{
        color: black !important;
      }

      .box-center {
          background: #eeeeee ;
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 50%;
          margin-bottom: 30px;
          margin-top: 30px;
      }

        .container {
            display: flex;
            justify-content: center;

        }

        .btn:hover {
            background-color: #cc493d;
          }

        th, td, tr {
            border: none !important;
        }

        .naujienos {
            width: 150px;
            padding: 20px;
            background-color: #ddd;
        }

        .pavadinimas {
            padding-top: 50px;
            color:black;
            text-align: center;
        }


        .box-center-1{
            margin-top:30px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .data{
          color:grey;
          font-size: 12px;
          text-align: right!important;
          padding-right: 20px;
        }


        /* SEARCH BOX */

        .search-box{
            width: 800px;
            margin-top: 180px;
        }


        .material-icons{
            color: black !important;
            font-size: 30px !important;
        }

        .ieskoti {
            background:none;
            border: none;
            margin-top: 18px;
        }

        .ieskoti:hover{
            background-color: transparent;
        }

        .virtuali {
          text-align: center;
          background-color: rgb(204,73,61, 0.8);
          height: 38px;
          padding-top: 1px;
          color:white;
        }

            /* OWL */
        .item {
          width: 80%;
          display: block;
          margin-top: 50px;
        }

        .owl-nav > div {
          margin-top: -10px;
          position: absolute;
          top: 50%;
          color: black;
        }




    </style>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta charset="UTF-8">
   </head>
   <body background="images/3.jpg">

     <?php
      include('header.php');
     ?>


                          <!--PARALLAX  -->
        <div class="parallax-container">
          <div class="parallax">
            <img src="images/101.jpg">
          </div>

                            <!--PAIESKA  -->
          <div class="container">
           <div class="search-box">
            <div class="virtuali">
              <h6>PAIEŠKA VIRTUALIOJE BIBLIOTEKOJE</h6>
             </div>
            <nav class="white">
             <div class="nav-wrapper">
              <div class="input-field">
                <form accept-charset="utf-8" name="searchForm" method="get" action="https://lmta.lvb.lt/primo-explore/search?vid=LMTA&lang=lt_LT&sortby=rank"
                enctype="application/x-www-form-urlencoded; charset=utf-8" target="_blank" onsubmit="searchPrimo()">
                <input name="iehack" type="hidden" value="☠">
                <input name="institution" type="hidden" value="LMTA">
                <input name="vid" type="hidden" value="LMTA">
                <input name="tab" type="hidden" value="default_tab">
                <input name="search_scope" type="hidden" value="LMTA">
                <input name="prefLang" type="hidden" value="lt_LT">
                <input name="query" type="hidden" id="primoQuery">
                <input id="search" type="search"  placeholder="Įveskite paieškos žodį ar frazę..." >
                <i class="material-icons">
                <button type="submit" class="ieskoti">
                <span class="material-icons">search</span></button></i>
                </form>
               </div>
             </div>
            </nav>
           </div>
          </div>
        </div>

                          <!--DESTYMAS-->
       <div class="row">
                        <!--CENTRAS NAUJIENOS BIBLIOTEKOJE-->
        <div class="col s12 m12 l12">
             <div class="box-center">
                <table>
                   <tr>
                     <th class="pavadinimas" colspan="2">TESTUOJAMA MEDICI.TV DUOMENŲ BAZĖ</th>
                   </tr>
                   <tr>
                     <td><img class="naujienos"src="images/download.jpg" alt=""></td>
                     <td><p> Iki š.m. gruodžio 5 d. akademijos bendruomenės nariams suteikta prieiga prie klasikinės muzikos video įrašų kolekcijos Medici.tv. Duomenų bazę sudaro koncertai, operų ir baletų įrašai, dokumentiniai filmai, menininkų portretai, edukacinės programos, taip pat yra galimybė stebėti koncertus realiuoju laiku.
                      Jungiantis iš LMTA kompiuterių tinklo prisijungimo slaptažodis nereikalingas.
                      Norint duomenų bazėmis naudotis iš kitų kompiuterių (namuose ir kt.), reikia prisijungti per nuotolinę prieigą EZPROXY</p>
                      <p class="data">2018-11-15</p></td>
                   </tr>
                   <tr>
                     <th class="pavadinimas" colspan="2">PATOBULINTAS PRISIJUNGIMAS PRIE DAUGIAFUNKCIO KOPIJAVIMO ĮRENGINIO</th>
                   </tr>
                   <tr>
                     <td><img class="naujienos" src="images/ee.png" alt=""></td>
                     <td><p>Įdiegtas prisijungimas prie įrenginio trečiuoju būdu – naudojant PIN kodą. Prisijungę prie print.lmta.lt, sistema sugeneruos šešių skaitmenų PIN kodą. Tad jungdamiesi prie įrenginio užteks įvesti tik Jums paskirtą kodą. (Šis prisijungimo būdas rekomenduotinas tiems, kurie neturi studento pažymėjimo) PIN kodo generavimo instrukcija.</p><p class="data">2018-09-15</p></td>
                 </tr>
              </table>
            </div>
          </div>



        <div class="col s12 m12 l3">
        </div>

        <div class="col s12 m12 l6">
        <h5 class="pavadinimas">NAUJI LEIDINIAI</h5>
        <div class="owl-carousel owl-theme">
            <div class="item">
                <img src="images/Paveikslėlis1.jpg">
            </div>
            <div class="item">
                <img src="images/Paveikslėlis2.jpg">
            </div>
            <div class="item">
                <img src="images/Paveikslėlis1.jpg">
            </div>
            <div class="item">
                <img src="images/Paveikslėlis4.jpg">
            </div>
            <div class="item">
                <img src="images/Paveikslėlis5.jpg">
            </div>
            <div class="item">
                <img src="images/Paveikslėlis4.jpg">
            </div>
        </div>
        </div>

      <div class="col s12 m12 l3">
      </div>

    </div>

     <?php
      include('footer.php');
      ?>


     <script type="text/javascript" src="js/materialize.min.js"></script>
     <script type="text/javascript" src="js/1owl.carousel.min.js"></script>
     <script type="text/javascript">

          $(document).ready(function(){
            $('.parallax').parallax();
          });


          const owl = $('.owl-carousel');
          owl.owlCarousel({
            items:4,
            loop:true,
            margin:0,
            dots:false,
            animateOut: 'slideOutLeft',
            animateIn: 'slideInRight',
            autoplay:true,
            autoplaySpeed:2000,
            autoplayHoverPause:true
          });


          // PAIESKA
          function searchPrimo() {
          document.getElementById("primoQuery").value="any,contains,"+document.getElementById("search").value;
          document.forms["searchForm"].submit();
          }
     </script>
   </body>
 </html>
