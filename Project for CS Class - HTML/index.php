<?php  
   if(isset($_POST['ok'])){
     session_start();
     $_SESSION['a0'] = $_POST['a0'];
     $_SESSION['a1'] = $_POST['a1'];
     $_SESSION['a2'] = $_POST['a2'];
     $_SESSION['a3'] = $_POST['a3'];
     $_SESSION['V'] = $_POST['V'];
     $_SESSION['w1'] = $_POST['w1'];
     $_SESSION['w2'] = $_POST['w2'];
   
     header('Location: graph.php');
   
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Intermodulacijski proizvodi i distorzija</title>
      <script type="text/javascript" src="https://www.hostmath.com/Math/MathJax.js?config=OK"></script>
      <script src="https://kit.fontawesome.com/273f6c59e3.js" crossorigin="anonymous"></script>
      <script src="https://code.highcharts.com/highcharts.js"></script>
      <script src="https://code.highcharts.com/highcharts-more.js"></script>
      <script src="https://code.highcharts.com/modules/dumbbell.js"></script>
      <script src="https://code.highcharts.com/modules/lollipop.js"></script>
      <script src="https://code.highcharts.com/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/modules/accessibility.js"></script>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
      <script type="text/javascript">
         function validateInputs(){
           var a = document.forms["input-form"]["a1"].value;
           var b = document.forms["input-form"]["a2"].value;
           var c = document.forms["input-form"]["a3"].value;
           var d = document.forms["input-form"]["a0"].value;
           var e = document.forms["input-form"]["V"].value;
           var f = document.forms["input-form"]["w1"].value;
           var g = document.forms["input-form"]["w2"].value;
           if ((a == null || a == '') || (b == null || b == '') || (c == null || c == '') || 
             (d == null || d == '') || (e == null || e == '') || (f == null || f == '') || (g == null || g == '')){
             alert("Molimo unesite sve varijable!");
             return false;
           }
         }
      </script>
   </head>
   <body>
      <h1 id="title">Intermodulacijski proizvodi i distorzija</h1>
      <hr/>
      <div id="containerEqu">
         <div class="equation" style="border-right:1px solid black">
            <p style="font-size:25px">Ulazni signal:
            <p>
            <p>\[v_{i}=V_{i}\cos(\omega_0t)\]</p>
         </div>
         <div class="equation" style="border-right:1px solid black">
            <p style="font-size:25px">Taylorov red:
            <p> 
            <p>\[v_{0}=a_{0}+a_{1}v_{i}+a_{2}v_i^2+a_{3}v_i^3\]</p>
         </div>
         <div class="equation">
            <p style="font-size:25px">Intermodulacijski proizvodi:
            <p>
            <p>\[m\omega_1+n\omega_2\] \[m,n=0,\pm1,\pm2,\pm3\]</p>
         </div>
      </div>
      <br/>
      <div id="text-container" style="background-color: white;">
         <p class="text">
            Ako se ulazni signal sastoji od 2 frekvencije
         </p>
         <p class="text-equ">
            \[v_{i}=V_{i}(cos \omega_{1}t+cos \omega_{2}t)\]
         </p>
         <p class="text">
            onda po jednadžbi Taylorovog reda dobijemo
         </p>
         <p class="text-equ">
            \[v_{0}=a_{0}+a_{1}(V_{i}(cos \omega_{1}t+cos \omega_{2}t))+a_{2}(V_{i}(cos \omega_{1}t+cos \omega_{2}t))^2+a_{3}(V_{i}(cos \omega_{1}t+cos \omega_{2}t))^3\] 
         </p>
         <p class="text">
            te nastanu i druge frekvencije kojih nije bilo na ulaznom signalu -> to su intermodulacijski proizvodi
         </p>
         </br>
         <div class="info">
            <a href="equation.php" target="_blank">
            <i class="fas fa-info-circle"></i>
            </a>
            <span class="tooltiptext">Klikni za detaljnu analizu jednadžbe!</span>
         </div>
      </div>
      <p style="text-align: center; color:white; font-size:30px; font-weight: bold; margin-bottom:-20px; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Unesite varijable:</p>
      </br>
      <form name="input-form" onsubmit="return validateInputs()" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
         <div class="inputForms">
            <div class="input">
               <p><i>a<span class="small-num">0</span>:</i></p>
               <input type="number" id="a0" name="a0" class="input-box" value="1">
            </div>
            <div class="input">
               <p><i>a<span class="small-num">1</span>:</i></p>
               <input type="number" id="a1" name="a1" class="input-box" value="1">
            </div>
            <div class="input">
               <p><i>a<span class="small-num">2</span>:</i></p>
               <input type="number" id="a2" name="a2" class="input-box" value="1">
            </div>
            <div class="input">
               <p><i>a<span class="small-num">3</span>:</i></p>
               <input type="number" id="a3" name="a3" class="input-box" value="1">
            </div>
            <div class="input">
               <p><i>V<span class="small-num">i</span>:</i></p>
               <input type="number" id="V" name="V" class="input-box" value="1">
            </div>
         </div>
         <div class="inputForms">
            <div class="input">
            </div>
            <div class="input">
               <p><i>&#969<span class="small-num">1</span>:</i></p>
               <input type="number" name="w1" class="input-box" value="25">
            </div>
            <div class="input">
            </div>
            <div class="input">
               <p><i>&#969<span class="small-num">2</span>:</i></p>
               <input type="number" name="w2" class="input-box" value="30">
            </div>
            <div class="input">
            </div>
         </div>
         </br></br></br>
         <div class="button-div">
            <input type="submit" class="submit-button" value="OK" name="ok">
         </div>
      </form>
      </br></br></br>
      <div class="footer-div">
         <footer class="footer" style="text-align: left">
            <p>Autor: Matija Žagar</p>
            <p>Mentor: prof. dr. sc. Miroslav Joler</p>
         </footer>
         <footer class="footer" style="text-align: right;">
         <p>Tehnički fakultet, Rijeka, 2021.</p>
         <p>&copy 2021. Matija Žagar</p>
         <footer>
      </div>
   </body>
</html>