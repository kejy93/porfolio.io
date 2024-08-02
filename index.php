<!-- pour nos future script  -->
<?php


 ?>



 <!-- partie html  -->
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta name="viewport" content="with=device">
     <meta charset="utf-8">
     <link rel="stylesheet" href="style.css">
     <title>CodeFusion | Acceuil</title>
   </head>
   <body>

        <header>
                <nav>
                    <a href="#"><img src="img/logocf.png" alt="" class="logo"></a>
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="apropos.php">A propos</a></li>
                        <li><a href="#">Portfolio</a></li>
                </nav>
        </header>

        <section class="text">
            <h1>Je suis <span class="auto-typing"></span></h1>
            <p> Programme de formation Code fusion. <br>
            Developpeur front-end bootstap. <br>
            web designeur, infographe....</p>
            <a href="https://wa.me/2250150327827?text=Bonjour,%0Akouyessein%20joseph%20eric%20yvan%0A">Me contacter</a> <a href="cv.pdf.pdf" class="cv">Mon CV</a>
        </section>

        <div class="overlay">

        </div>
        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
        <script>
          let typed = new Typed('.auto-typing', {
            strings: ['Kouyessein joseph','Dev Front-End','Codeur a Code fusion'],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
            fadeOut: true,
            fadeOutClass: 'typed-fade-aout',
            fadeOutDelay:500,
            shuffel:true,
          })
        </script>
   </body>
 </html>
