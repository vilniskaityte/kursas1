

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

      .box-center{
          background: #eeeeee ;
          padding: 10px;
          display: block;
          margin-left: auto;
          margin-right: auto;
          width: 400px;
      }

      .pavadinimas{
          text-align: center;
          margin-top:30px;
        }

      .btn{
          width: 180px !important;
          height: 45px !important;
          background-color:#a63b32 !important;
          display: block !important;
          margin-left: auto !important;
          margin-right: auto !important;
          margin-top:10px!important;
          margin-bottom: 10px!important;
          text-align: center;
       }

      .btn:hover{
           background-color: #cc493d !important;
       }



        a{
          color:black !important;
        }

        ul.breadcrumb1{
            padding: 10px 16px !important;
            list-style: none;
            background-color: #eee;
        }


        ul.breadcrumb1 li{
            display: inline;
            font-size: 14px;
        }


        ul.breadcrumb1 li+li:before{
            padding: 8px;
            color: black;
        }


        .breadcrumb1 a{
            color: black;
            text-decoration: none;
        }


        .breadcrumb1 a:hover{
            color: #a63b32 !important;
        }


       .input-field input[type=text]{
            color: #a63b32 !important;
        }

        .input-field input[type=text]:focus {
             border-bottom: 1px solid #a63b32 !important;
             box-shadow: 0 1px 0 0 #a63b32 !important;
         }

        .privalomas {
              color: #a63b32;
          }

        #textarea2:focus {
             border-bottom: 1px solid #a63b32 !important;
             box-shadow: 0 1px 0 0 #a63b32 !important;
         }

         #textarea2:focus {
              color: #a63b32 !important;
         }

         .input-field input[type=email]{
              color: #a63b32 !important;
          }

          .input-field input[type=email]:focus {
               border-bottom: 1px solid #a63b32 !important;
               box-shadow: 0 1px 0 0 #a63b32 !important;
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
          <li><a href="klausk.php">Klausk</a></li>
      </ul>


       <h5 class="pavadinimas">KLAUSK BIBLIOTEKININKO</h5>
       <div class="box-center">
         <p>Iškilus klausimams, prašome užpildyti formą.
         Atsakymą išsiųsime Jūsų nurodytu el. paštu per 48 valandas, išskyrus savaitgalius, švenčių dienas bei nenumatytus atvejus, kai biblioteka nedirba.</p>
       </div>
       <div class="input-field col s12 m12 l12">
       <div class="box-center">
         <form id="contact" action="app/src/app.php" method="post">
             <fieldset>
                 <table>
                   <tr>
                     <td>1. Jūsų vardas, pavardė<span class="privalomas">*</span>:</td>
                     <td><input type="text" name="vardas" value="" required autofocus ></td>
                   </tr>

                   <tr>
                     <td>2. Jūsų el. paštas<span class="privalomas">*</span>:</td>
                     <td><input type="email" name="email" value="" required></td>
                   </tr>

                   <tr>
                     <td>4. Jūsų žinutė<span class="privalomas">*</span>:</td>
                     <td><textarea id="textarea2" name="message" class="materialize-textarea" data-length="120"></textarea></td>
                 </tr>
               </table>

               <button class="btn" type="submit" name="submit">Siųsti</button>
           </fieldset>
         </form>
       </div>
      </div>

        <?php
         include('footer.php');
        ?>

    <script type="text/javascript" src="js/materialize.min.js"></script>

  </body>
</html>
