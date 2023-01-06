 <!-- *          La déclaration n'est pas une balise HTML. Il s'agit d'une "information" pour le navigateur sur le type de document à attendre. -->
 <!DOCTYPE html>

 <!-- * <html>. Cet élément encadre tout le contenu de la page. Cet élément est parfois appelé l'élément racine. -->
 <html lang="fr">


 <!-- *  = head =  Définit un conteneur pour les métadonnées d'une page Web . -->

 <head>

     <!-- *  Définit le codage des caractères pour toute la page Web. -->
     <!-- * ( utf-8 ) regroupe l'ensemble des caractères connus utilisés dans les différents langages humains -->
     <meta charset="UTF-8">

     <!--  *  ( http-equiv ) Définit les méta-règles pour la page Web. -->
     <!--  * (X-UA-Compatible )   Définit la version d'Internet Explorer avec laquelle la page Web doit être rendue. -->
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

     <!--  * ( name )  Définit les informations supplémentaires jointes à la page Web. -->
     <!--  * ( viewport  ) Définit les règles de dimension et d'échelle pour la fenêtre. -->
     <!-- * ( width=device-width, initial-scale=1.0 ) vous pouvez spécifier la largeur et l'échelle initiale de la page Web. -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Ns Beauty</title>


     <!-- CSS only -->

     <!-- * ( link ) Définit un lien entre la page Web actuelle et un lien externe ou une ressource. -->
     <!--  * ( href ) Définit l'URL du lien.
             ! ( href="https:/css/website.css" )   URL absolue .
             ! ( href="href="/css/style..css"" )   URL relative .
      -->
     <!-- * ( rel ) Définit un type de lien , expliquant comment le lien se rapporte à la page Web actuelle. -->

     <link rel="stylesheet" href="style/style.css">
     <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
         integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

 </head>

 <body>
     <!-- ------------------------------------------ HEADER - NAVBAR --------------------------------------- -->
     <header data-vide-bg= "@yield('videoarriereplan')">
         <!-- --------------------- PARTIR NAVBAR --------------- -->

         <!-- Menu version Ordi -->
         <div class="BarreNav-VersionOrdi">

             <!-- Ici mon logo -->
             <a class="logo" href= "index.html"><img src= "image/logo_ns.beauty-removebg-preview.png" width="200"
                     alt="logo"></a>

             <!--  Mon menu de la parti ordi -->

             <nav>
                 <ul class="MenuNav">
                     <li><a href= "index.html">Accueil</a></li>
                     <li><a href= "histoire.html">Histoire</a></li>
                     <li><a href= "Prestations.html">Prestation</a></li>
                     <li><a href= "Reservation.html">Réservation</a></li>
                     <li><a href="#formulaireDeContact">Contact</a></li>
                     <li>
                         <a href= "pages/index.html" class="inscription">
                             <i class="fa-solid fa-user"></i>
                             &nbsp;Se connecter</a>
                     </li>
                 </ul>
             </nav>

             <!-- Fin du menu ordri  -->

             <!-- Mon Menu burger en version button  -->
             <!-- Cacher sur ordinateur -->
             <p class="CacheMenuBurgerOrdi CustomMenuBurger">Menu</p>

         </div>
         <!-- Fin du code de la parti navbar -->

         <!-- --------------------- FIN PARTIR NAVBAR --------------- -->

         <!-- --------------------- DEBUT DU CODE HEADER CENTER LE TITRE--------------- -->

         <h1 class="HeaderTitre">Votre Bien être avant tout ! </h1>

         <!-- --------------------- FIN DU CODE HEADER CENTER LE TITRE--------------- -->

         <!-- --------------------- PARTIR NAVBAR Mobile --------------- -->

         <div class="ContenairMenuBurgerMobile">
             <a class="close">&times;</a>
             <div class="MenuMobile">
                 <a href= "index.html">Accueil</a>
                 <a href= "histoire.html">Histoire</a>
                 <a href= "Prestations.html">Prestation</a>
                 <a href= "Reservation.html">Réservation</a>
                 <a href="#formulaireDeContact">Contact</a>
             </div>
         </div>


     </header>

     <!-- --------------------- FIN PARTIR NAVBAR Mobile --------------- -->


    @yield("contenuprincipal")











     <footer>
         <div>
             <a class="logoFooter">
                 <img src= "image/logo_ns.beauty-removebg-preview.png" width="150" alt="">
             </a>
         </div>

         <div class="copyright">
             <p>© 2022 <span class="copy"> Ns Beauty </span>, Tous les droits réservés </p>

         </div>
         <div>
             <!-- &nbsp; : espace -->
             <p class="logoRéseau">
                 <a href=""> <i class="fa-brands fa-facebook-f"></i> </a> &nbsp;&nbsp;
                 <a href=""> <i class="fa-brands fa-instagram"></i></a> &nbsp;&nbsp;
                 <a href=""> <i class="fa-brands fa-snapchat"></i> </a>
             </p>
         </div>


     </footer>


     <!--
       
 
        (src) Définit la source du script externe.
         (src="/javascript/my-scripts.js")   L'URL peut être relative ou absolue.
 
 
 
         (type) Définit le type MIME du script externe.
         (type="text/javascript" )  C'est pour .js les fichiers.
     -->

     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

     <script src="js/jquery.vide.js"></script>
     <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
     <script>
         AOS.init();
     </script>
     <!-- JavaScript Bundle with Popper -->
     <script src="js/index.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
     </script>
     <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
     <script type="text/javascript">
         (function() {
             emailjs.init("pLeN9_zm7yI7muGwr");
         })();
     </script>
 </body>

 </html>
