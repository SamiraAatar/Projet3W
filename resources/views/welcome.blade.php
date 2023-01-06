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
     <header data-vide-bg= "Videos/TestVideo.mp4">
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


     <section id="SectionUneIndex">
         <div class="SectionUneDivTexteIndex" data-aos="zoom-in">
             <h2>NS.Beauty</h2>
             <p> Ns.Beauty est la pour vous ! <br>
                 Déplacement à domicile pour un moment de détente unique ! <br>
                 Prenez soin de vous, personne le fera à votre place. <br>
                 N'hésiter pas à réserver votre rendez-vous. </p>

         </div>

         <div class="SectionUneDivImageIndex" data-aos="zoom-in">
             <img src= "image/imagesection2home.jpg" width="400" alt="">
         </div>

     </section>

     <section id="SectionTroisIndex">
         <p class="SectionTroisIndexTitre"> «Votre corps est précieux. Il est votre véhicule pour l'éveil. <br>
             Prenez-en soin!» </p>

     </section>


     <section id="apropos" class="about-section">
         <div class="SectionAproposDeMoi">
             <div class="inner-container">
                 <h1>Offre de Lancement</h1>
                 <p class="text">
                     Offre de lancement <br>
                     évadez vous et prolonger votre détente avec 1h30 de massage a domicile au prix d'une heure,
                     soit 30 minutes vous sont offert.
                     Profiter d'un instant pour votre bien être.

                 </p>
                 <div class="skills">
                     <a class="btnOffre" href= "FormPrisedeRDV/ IndexMassage.html">
                         Réserver
                     </a>

                 </div>
             </div>
     </section>

     <section id="Etape">
         <div class="contenair-Etape">

             <div class="Etape">
                 <div class="number">
                     <H1>1</H1>
                 </div>
                 <div class="textEtape">
                     <h2>Prestation</h2>
                     <p>Prennez le temps de choisir <br>
                         la prestation qui vous le mieux.</p>
                 </div>
             </div>

             <div class="Etape">

                 <div class="number">
                     <H1>2</H1>
                 </div>
                 <div class="textEtape">
                     <h2>S'identifier</h2>
                     <p>Connectez-vous, si vous n'avez pas encore <br>
                         de compter cliquer <a href="">crée un compte</a></p>
                 </div>

             </div>

             <div class="Etape">
                 <div class="number">
                     <H1>3</H1>
                 </div>
                 <div class="textEtape">
                     <h2>Prendre RDV</h2>
                     <p>Une fois votre prestation choisie, <br>
                         prenez votre rendez-vous.</p>
                 </div>

             </div>

             <div class="Etape">

                 <div class="number">
                     <H1>4</H1>
                 </div>
                 <div class="textEtape">
                     <h2>Suivie</h2>
                     <p>Connectez-vous pour avoir <br>
                         le suivie de votre rendez-vous</p>
                 </div>

             </div>
         </div>




     </section>


     <section id="SectionQuatreIndex">

         <h1 class="SectionQuatreIndexTitre">Nos Prestations</h1>

         <div class="SectionQuatreIndex-container">

             <div class="card">

                 <div class="ContenairCard">

                     <div class="ImgCard">
                         <img src= "image/SoinDuVisageBulle.jpg" alt="">
                     </div>

                     <div class="TexteCard">
                         <div>
                             <h2>Nos Soins Du Visage : </h2>

                             <p>
                                 Découvrez nos soins du visage et laissez-vous emporter pour un moment de détente
                                 inoubliable.

                             </p>
                         </div>
                     </div>

                 </div>

             </div>

             <div class="card">

                 <div class="ContenairCard">

                     <div class="ImgCard">
                         <img src= "image/prestaMassage.jpg" alt="">
                     </div>

                     <div class="TexteCard">
                         <div>
                             <h2>Nos Massages : </h2>

                             <p>
                                 Découvrez nos massages et laissez-vous emporter pour un moment de détente inoubliable.

                             </p>
                         </div>
                     </div>

                 </div>

             </div>

             <div class="card">

                 <div class="ContenairCard">

                     <div class="ImgCard">
                         <img src= "image/Make'upForfait.jpg" alt="">
                     </div>

                     <div class="TexteCard">
                         <div>
                             <h2>Nos Make'up : </h2>

                             <p>
                                 Découvrez nos make'up moderne <br> et sur-mesure. <br>
                                 <a href= "Makeup.html">

                                 </a>
                             </p>


                         </div>
                     </div>

                 </div>

             </div>

         </div>


         <div class="SectionTroisBlockbtn">
             <a href= "Prestations.html">
                 <button class="SectionTroisBtn"> Voir Plus</button>
             </a>
         </div>
     </section>







     <section id="Newsletter">
         <div class="containerN">
             <form action="">
                 <h1>Inscrivez-vous à notre Newsletter</h1>
                 <p>Inscrivez-vous à notre Newsletter et recevez toute nos offres beauté, <br>
                     ainsi que nos conseils, et actualités directement dans votre boite Email.</p>
                 <div class="email-box">
                     <i class="fas fa-envelope"></i>
                     <input class="tbox" type="email" name="" value=""
                         placeholder="Entrez votre email">
                     <button class="btn" type="button" name="button">S'inscrire</button>
                 </div>
             </form>
         </div>

     </section>


     <section id="formulaireDeContact">
         <div class="containerContact">
             <div class="contact-box">
                 <div class="left"></div>
                 <div class="right">
                     <form id="form">
                         <h2>Contactez-Nous</h2>
                         <input type="text" name="to_name" class="field" placeholder="Nom">
                         <input type="text" name="from_name" class="field" placeholder="Prénom">
                         <input type="text" name="email" class="field" placeholder="Adresse Email">
                         <textarea placeholder="Message" name="message" class="field"></textarea>
                         <button type="submit" class="btncontact">Envoyer</button>
                     </form>

                 </div>
             </div>
         </div>

     </section>


     <section id="SectionSixIndex">
         <h1>Avis Clientes:</h1>

         <div class="contenairAvis ">
             <div class="Avis">
                 <p> <br>
                     <br>Je recommande sans hésiter Tanya ! <br>
                     J’ai passé un excellent moment pendant mon soin. <br>
                     Les produits sont très agréables. <br>
                     Vous serez entre des mains expertes. <br>
                     A faire et à refaire.
                     <br>
                     <br>
                     Marianne
                     <br>
                     <br>
                 </p>
             </div>
             <div class="Avis">
                 <p>
                     <br> Vous ne connaissez pas Tanya, Foncez !! <br>
                     Toujours souriante et agréable. <br>
                     Je suis satisfaite à chaque fois. <br>
                     Les massages sont de qualité pour se ressourcer. <br>
                     C’est également une très bonne esthéticienne ! <br>
                     Donc une adresse à conserver. Une vraie rencontre <br>
                     qui mérite largement un avis très positif.
                     <br>
                     Tiphany
                     <br>
                     <br>
                 </p>
             </div>
             <div class="Avis">
                 <p><br> <br> <br> Merci Tanya pour cette séance de relaxation !!! <br>
                     Un pur moment de détente : un soin du visage au top ! <br>
                     Je vous le conseille… <br>
                     <br>
                     Imene
                     <br>
                     <br>
                     <br>
                 </p>
             </div>
         </div>

     </section>











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
