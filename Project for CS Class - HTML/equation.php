<!DOCTYPE html>
<html>
   <head>
      <title>Izračun funkcije</title>
      <script type="text/javascript" src="https://www.hostmath.com/Math/MathJax.js?config=OK"></script>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
   </head>
   <body>
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
            te nastanu i druge frekvencije kojih nije bilo na ulaznom signalu
         </p>
      </div>
      <br/>
      <div id="text-container" style="background-color: white;">
         <p class="text">
            Kvadriramo i kubiramo pripadne vrijednosti, te raščlanjujemo jednadžbu.
         </p>
         <p class="text-equ">
            \[v_{0}=a_{0}+a_{2}V^{2}+a_{1}V\cos[t\omega_{1}]+\frac{9}{4}a_{3}V^{3}cos[t\omega_{1}]+\frac{1}{2}a_{2}V^{2}cos[t\omega_{1}]^{2}+\frac{1}{4}a_{3}V^{3}cos[t\omega_{1}]^{3}\]
            \[+\space a_{1}V\cos[t\omega_{2}]
            +\frac{9}{4}a_{3}V^{3}\cos[t\omega_{2}]
            +2a_{2}V^{2}\cos[t\omega_{1}]\cos[t\omega_{2}]
            +\frac{3}{2}a_{3}V^{3}\cos[t\omega_{1}]^{2}\cos[t\omega_{2}]\]
            \[+\space \frac{1}{2}a_{2}V^{2}\cos[t\omega_{2}]^{2}
            +\frac{3}{2}a_{3}V^{3}\cos[t\omega_{1}]\cos[t\omega_{2}]^{2}
            +\frac{1}{4}a_{3}V^{3}\cos[t\omega_{2}]^{3}\]
            \[-\space \frac{1}{2}a_{2}V^{2}\sin[t\omega_{1}]^{2}
            -\frac{3}{4}a_{3}V^{3}\cos[t\omega_{1}]\sin[t\omega_{1}]^{2}
            -\frac{3}{2}a_{3}V^{3}\cos[t\omega_{2}]\sin[t\omega_{1}]^{2}\]
            \[-\space \frac{1}{2}a_{2}V^{2}\sin[t\omega_{2}]^{2}
            -\frac{3}{2}a_{3}V^{3}\cos[t\omega_{1}]\sin[t\omega_{2}]^{2}
            -\frac{3}{4}a_{3}V^{3}\cos[t\omega_{2}]\sin[t\omega_{2}]^{2}\]
         </p>
         <p class="text">
            Iskoristimo odgovarajuće trigonometrijske identitete te faktoriziramo jednadbžu za pregledniji uvid u IM proizvode i pripadne amplitude.
         </p>
         <p class="text-equ">
            \[v_{0}=\frac{1}{4}(4\space (a_{0}+a_{2}V^{2})+V\space ((4a_{1}+9a_{3}V^{2})\cos[t\omega_{1}]+4a_{1}\cos[t\omega_{2}]\]
            \[+\space V\space(2a_{2}(\cos[2t\omega_{1}]+2\cos[t(\omega_{1}-\omega_{2})]
            +\cos[2t\omega_{2}]+2\cos[t(\omega_{1}+\omega_{2})])\]
            \[+\space a_{3}V(\cos[3t\omega_{1}]+3\cos[t(\omega_{1}-2\omega_{2})]
            +3\cos[t(2\omega_{1}-\omega_{2})]+9\cos[t\omega_{2}]\]
            \[+\space \cos[3t\omega_{2}]+3(\cos[t(2\omega_{1}+\omega_{2})]
            +\cos[t(\omega_{1}+2\omega_{2})])))))\]
         </p>
         <p class="text">
            Daljnjom eliminacijom zagrada dolazimo do željenih rezultata, odnosno različitih <i>&#969<span class="small-num">1</span></i> i <i>&#969<span class="small-num">2</span></i> kombinacija (IM proizvodi).
         </p>
         <p class="text-equ">
            \[v_{0}=(a_{0}+a_{2}V^2)+\frac{1}{4}V(4a_{1}+9a_{3}V^{2})\cos[t\omega_{1}]
            +\frac{1}{4}V(4a_{1}+9a_{3}V^{2})\cos[t\omega_{2}]\]
            \[+\space\frac{1}{2}V^{2}a_{2}\cos[2t\omega_{1}]
            +\frac{1}{2}V^{2}a_{2}\cos[2t\omega_{2}]
            +V^{2}a_{2}\cos[t(\omega_{1}-\omega_{2})]
            +V^{2}a_{2}\cos[t(\omega_{1}+\omega_{2})]\]
            \[+\space\frac{1}{4}V^{3}a_{3}\cos[3t\omega_{1}]
            +\frac{1}{4}V^{3}a_{3}\cos[3t\omega_{2}]
            +\frac{3}{4}V^{3}a_{3}\cos[t(\omega_{1}-2\omega_{2})]
            +\frac{3}{4}V^{3}a_{3}\cos[t(2\omega_{1}-\omega_{2})]
            +\frac{3}{4}V^{3}a_{3}\cos[t(2\omega_{1}+\omega_{2})]
            +\frac{3}{4}V^{3}a_{3}\cos[t(\omega_{1}+2\omega_{2})]\]
         </p>
      </div>
   </body>
</html>