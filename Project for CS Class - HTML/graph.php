<?php  
   session_start();
   
   if(!isset($_POST['ok'])){
     $a0 = $_SESSION['a0'];
     $a1 = $_SESSION['a1'];
     $a2 = $_SESSION['a2'];
     $a3 = $_SESSION['a3'];
     $V = $_SESSION['V'];
     $w1 = $_SESSION['w1'];
     $w2 = $_SESSION['w2'];
   
   }
   
   if(isset($_POST['ok'])){
   
     $a0 = $_POST['a0'];
     $a1 = $_POST['a1'];
     $a2 = $_POST['a2'];
     $a3 = $_POST['a3'];
     $V = $_POST['V'];
     $w1 = $_POST['w1'];
     $w2 = $_POST['w2'];
   
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
           if ((a == null || a == '') || (b == null || b == '') || (c == null || c == '') || (d == null || d == '') || (e == null || e == '') || (f == null || f == '') || (g == null || g == '')){
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
               <input type="number" id="a0" name="a0" class="input-box" value = <?php echo $a0 ?>>
            </div>
            <div class="input">
               <p><i>a<span class="small-num">1</span>:</i></p>
               <input type="number" id="a1" name="a1" class="input-box" value = <?php echo $a1 ?>>
            </div>
            <div class="input">
               <p><i>a<span class="small-num">2</span>:</i></p>
               <input type="number" id="a2" name="a2" class="input-box" value = <?php echo $a2 ?>>
            </div>
            <div class="input">
               <p><i>a<span class="small-num">3</span>:</i></p>
               <input type="number" id="a3" name="a3" class="input-box" value = <?php echo $a3 ?>>
            </div>
            <div class="input">
               <p><i>V<span class="small-num">i</span>:</i></p>
               <input type="number" id="V" name="V" class="input-box" value = <?php echo $V ?>>
            </div>
         </div>
         <div class="inputForms">
            <div class="input">
            </div>
            <div class="input">
               <p><i>&#969<span class="small-num">1</span>:</i></p>
               <input type="number" name="w1" class="input-box" value = <?php echo $w1 ?>>
            </div>
            <div class="input">
            </div>
            <div class="input">
               <p><i>&#969<span class="small-num">2</span>:</i></p>
               <input type="number" name="w2" class="input-box" value = <?php echo $w2 ?>>
            </div>
            <div class="input">
            </div>
         </div>
         <br/><br/><br/><br/>
         <div class="button-div">
            <input type="submit" class="submit-button" value="OK" name="ok">
         </div>
      </form>
      </br></br>
      <figure class="highcharts-figure">
         <div id="container"></div>
      </figure>
      </br></br></br>
      <div class="table-div">
         <div class="align-table"></div>
         <table id="table">
            <thead>
               <tr>
                  <th>&#969<span class="table-num">2</span> - &#969<span class="table-num">1</span></th>
                  <th>2&#969<span class="table-num">1</span> - &#969<span class="table-num">2</span></th>
                  <th>&#969<span class="table-num">1</span></th>
                  <th>&#969<span class="table-num">2</span></th>
                  <th>2&#969<span class="table-num">2</span> - &#969<span class="table-num">1</span></th>
                  <th>2&#969<span class="table-num">1</span></th>
                  <th>&#969<span class="table-num">1</span> + &#969<span class="table-num">2</span></th>
                  <th>2&#969<span class="table-num">2</span></th>
                  <th>3&#969<span class="table-num">1</span></th>
                  <th>2&#969<span class="table-num">1</span> + &#969<span class="table-num">2</span></th>
                  <th>2&#969<span class="table-num">2</span> + &#969<span class="table-num">1</span></th>
                  <th>3&#969<span class="table-num">2</span></th>
               </tr>
            </thead>
            <tbody id="testBody"></tbody>
         </table>
         <div class="align-table"></div>
      </div>
      </br></br></br>
      <form name="reset-form" action="index.php">
         <div class="button-div">
            <input type="submit" class="submit-button" value="Reset" name="reset">
         </div>
      </form>
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
<script>
   var w1 = <?php echo $w1 ?>;
   var w2 = <?php echo $w2 ?>;
   
   const items = [
     { value1: w2 - w1, value2: (2 * w1) - w2, value3: w1, value4: w2, value5: (2 * w2) - w1, value6: (2 * w1), value7: w1 + w2, value8: (2 * w2), value9: (3 * w1), value10: (2 * w1) + w2, value11: (2 * w2) + w1, value12: (3 * w2)},
   ];
   function loadTableData(items) {
     const table = document.getElementById("testBody");
     items.forEach( item => {
       let row = table.insertRow();
       let value1 = row.insertCell(0);
       value1.innerHTML = item.value1;
       let value2 = row.insertCell(1);
       value2.innerHTML = item.value2;
       let value3 = row.insertCell(2);
       value3.innerHTML = item.value3;
       let value4 = row.insertCell(3);
       value4.innerHTML = item.value4;
       let value5 = row.insertCell(4);
       value5.innerHTML = item.value5;
       let value6 = row.insertCell(5);
       value6.innerHTML = item.value6;
       let value7 = row.insertCell(6);
       value7.innerHTML = item.value7;
       let value8 = row.insertCell(7);
       value8.innerHTML = item.value8;
       let value9 = row.insertCell(8);
       value9.innerHTML = item.value9;
       let value10 = row.insertCell(9);
       value10.innerHTML = item.value10;
       let value11 = row.insertCell(10);
       value11.innerHTML = item.value11;
       let value12 = row.insertCell(11);
       value12.innerHTML = item.value12;
     });
   }
   loadTableData(items);
   loadTableData([]);
</script>
<script>
   var a0 = <?php echo $a0 ?>;
   var a1 = <?php echo $a1 ?>;
   var a2 = <?php echo $a2 ?>;
   var a3 = <?php echo $a3 ?>;
   var V = <?php echo $V ?>;
   var w1 = <?php echo $w1 ?>;
   var w2 = <?php echo $w2 ?>;
   
   var values = [
     {x: 0, y:a0 + (a2 * (V ** 2)), name:" "},
     {x: w2 - w1, y:(V ** 2) * a2, name:"\u03C9\u2082-\u03C9\u2081"},
     {x: (2*w1)-w2, y:(3/4) * (V ** 3) * a3, name:"2\u03C9\u2081-\u03C9\u2082"},
     {x: w1, y:((1/4) * V) * (4 * a1 + 9 * a3 * (V ** 2)), name:"\u03C9\u2081"},
     {x: w2, y:((1/4) * V) * (4 * a1 + 9 * a3 * (V ** 2)), name:"\u03C9\u2082"},
     {x: (2*w2)-w1, y:(3/4) * (V ** 3) * a3, name:"2\u03C9\u2082-\u03C9\u2081"},
     {x: (2*w1), y:(1/2) * (V ** 2) * a2, name:"2\u03C9\u2081"},
     {x: w1+w2, y:(V ** 2) * a2, name:"\u03C9\u2081+\u03C9\u2082"},
     {x: (2*w2), y:(1/2) * (V ** 2) * a2, name:"2\u03C9\u2082"},
     {x: (3*w1), y:(1/4) * (V ** 3) * a3, name:"3\u03C9\u2081"},
     {x: (2*w1)+w2, y:(3/4) * (V ** 3) * a3, name:"2\u03C9\u2081+\u03C9\u2082"},
     {x: (2*w2)+w1, y:(3/4) * (V ** 3) * a3, name:"2\u03C9\u2082+\u03C9\u2081"},
     {x: (3*w2), y:(1/4) * (V ** 3) * a3, name:"3\u03C9\u2082"},
   ];
   
   Highcharts.chart('container', {
   
       chart: {
           type: 'lollipop',
           height: 700
       },
   
       legend: {
           enabled: false
       },
   
       tooltip: {
           shared: true,
           formatter: function () {
            return 'x = ' + this.x +
                '</br>y = ' + this.y;
          }
       },
   
       title: {
           text: 'IM Proizvodi'
       },
   
       xAxis: {
           type: 'category',
           lineWidth: 2,
           lineColor: 'black',  
           min: 0.5,  
           tickPositioner: function(){
             return this.series[0].processedXData;
           },    
           labels: {
             allowOverlap: true,
             rotation: 310,
             style: {
               color: 'black',
               font: '20px Trebuchet MS, Verdana, sans-serif',
             },
           },
       },
   
       yAxis:{
           lineColor: 'black',
           lineWidth: 2,
           title: {
               text: 'A',
               rotation: 0,
               margin: 40,
               style: {
                   color: 'black',
                   font: '15px Trebuchet MS, Verdana, sans-serif'
               },
           },
           formatter: function(){
             console.log(this)
           },
           labels: {
             style: {
               color: 'black',
               font: '15px Trebuchet MS, Verdana, sans-serif'
             },
           },
       },
   
       series: [{
           name: '',
           color: 'black',
           connectorWidth: 2,
           connectorColor: 'black',
           marker: {
               name: '',
               color: 'black',
               fillColor: 'black',
               symbol: 'triangle',
               radius: 7
           },
           data: values,
       }]
   });
</script>