@extends('layout')
@section('videoarriereplan','Videos/videoContact.mp4')
@section('contenuprincipal')



<section class="services">
    <div class="ContainerService">
     
     <div class="ContainerCard">
       <div class="cardContact">
         <div class="box">
          <i class="fa-solid fa-clock"></i>
           <h3>Horaires</h3>
           <p>Je suis disponnible  du <br>
             Mardi - Dimanche: 09:00 - 20:00 </p>
         </div>
       </div>
       <div class="cardContact">
         <div class="box">
          <i class="fa-solid fa-map-location-dot"></i>
           <h3>Localisation</h3>
           <p>Je me situe à Pontoise, et me déplace dans un rayon de 30km sans frais supplémentaire.</p>        
            </div>
       </div>
       <div class="cardContact">
         <div class="box">
           <i class="fa fa-mobile"></i>
           <h3> contact</h3>
           <p>Je suis joignables au : <br>
            07-69-93-68-84
    
           </p>
         </div>
       </div>
      
     </div>
   </div>
 </section>


  
 <section id="formulaireDeContact">

  <div class="containerContact">
      <div class="contact-box">
          <div class="left"></div>
          <div class="right">
              <form id="contact" method="POST" action="https://formspree.io/f/moqzvara">
                  <h2>Contactez-Nous</h2>
                  <input type="text" name="to_name" maxlength="16" class="field" placeholder="Nom">
                  <input type="text" name="from_name" maxlength="30" class="field" placeholder="Prénom">
                  <input type="email" name="email" class="field" placeholder="Adresse Email">
                  <textarea placeholder="Message" name="message" class="field"></textarea>
                  <div id="contact-form-error" class="form-msg form-error-msg" style="display: none">
                  Une erreur est survenue lors de la soumission de votre message. Veuillez réessayer s'il vous plaît !  
                  </div>
                  <div id="contact-form-status" class="form-msg form-success-msg" style="display: none">
                    Merci de nous avoir contacter, notre équipe entrera en contact avec vous  ! 
                  </div>

                  <button type="submit" id="contactsubmitbtn" class="btncontact">Envoyer</button>
              </form>
            
          </div>
      </div>
  </div>

</section>

<section class="maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41839.86597793595!2d2.0646234792889615!3d49.0487828523621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6f56e8651b715%3A0x20a05753a7a6e9d8!2sPontoise!5e0!3m2!1sfr!2sfr!4v1648488726323!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

 </section>

 @endsection