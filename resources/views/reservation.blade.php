@extends('layout')
@section('videoarriereplan','Videos/ReservationHeader.mp4')
@section('contenuprincipal')

<section id="SectionUneHistoire">
    <div class="SectionUneDivTexteHistoire" data-aos="zoom-in">
      <h2>NS.Beauty</h2>
      <p> Tanya votre esthéticienne se deplace chez vous, <br>
           selon vos envies et <strong>sans frais supplémentaires ! </strong>  <br>

           je me déplace avec mon matériel et ma bonne humeur <br> jusqu’à votre domicile. 
       
          
           Située à Pontoise (95300),  <br>
            je me déplace dans un périmètre d'environ 30 kilomètres  <br>
             et vous propose un large choix de prestations.  <br>
 
            <strong> N’hésiter plus, réserver votre moment de bien être.</strong> <br> 

           
           Pour cela, il vous suffit de remplir le formulaire. <br>
             
          
          Notre équipe vous contactera dans les plus bref délai,  <br>
          pour confirmer votre rendez-vous. 
        </p>

          
           
       

    </div>
    <div class="SectionUneDivImageHistoire" data-aos="zoom-in">
        <img src="./image/tableMassageRéser.jpg" width="400" alt="">
    </div>

</section>


<section id="Formulaire">
<div class="contenairblabla">
<div class="NomPrenomtexte">
<h1>Nom</h1>
<h1>Prenom</h1>
</div>

<div class="NomPrenom">
<input type="text" placeholder="">
<input type="text" placeholder="">
</div>
<div class="NumeroAdresseTexte">
    <h1>Numero</h1>
    <h1>Adresse complète </h1>
   
    </div>
    <div class="NumeroAdresse">
        <input type="number" placeholder="">
        <input type="" placeholder="">
        </div>
        <div class="dateheuretext">
            <h1>Date Souhaitée</h1>
            <h1>Heure Souhaitée</h1>  
        </div>
        <div class="DateHeure">
          <input type="date">
          <input type="time">
        </div>
        <section id="PrestationSouhaitées">
          <h1>Prestations Souhaitées</h1>
  
                  <div class="PrestationSouhaite">
                    
                      <div class="prod">
                          <h6>Soin Visage:</h6>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required> 
                              <label for=""> Nettoyage de peau </label> 
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Soin Hydratant </label>
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Soin sur mesure </label>
                          </div>
                          
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Soin oxygène </label>
                          </div>
                          
                      </div>
                     
                      <div class="prod">
                          <h6>Massages: </h6>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Massage modelage </label>
                          </div>
                          <div class="pr">
                              
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Massage californien </label>
                          
                          </div>
                          
                         
                      </div>
                     <div class="prod">
                          <h6>Épilations Visage : </h6>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Sourcils </label>
                          </div>
                          <div class="pr">
                              
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Mentons </label>
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Lèvres </label>
                          </div>
                          <div class="pr">
                              <input type="checkbox" value="Prestations"required>
                              <label for=""> Joue </label>
                          </div>
  
  
                     </div>
                     <div class="prod">
                              <h6>Épilations Corps : </h6>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Aisselles </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Ventre </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi Bras </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Bras </label>
                              </div>
                     </div>
                     <div class="prod">   
                              <h6>Épilations jambes : </h6>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Cuisses </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi jambes </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Jambes entières </label>
                              </div>
                              <div class="pr">
                                  
                              </div>
                              
                      </div>
  
                      <div class="prod"> 
                           <h6>Épilations Maillot : </h6>       
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Simple </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Brésilien </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Intégral </label>
                              </div>
                      </div>
                      <div class="prod">
                              <h6> Manucure : </h6>
                          
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Pose de vernis simple </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Pose de vernis au gel  </label>
                              </div>
                      </div>
                              
                      <div class="prod">
                              <h6>Make'up : </h6>
  
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Make'up simple </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Make'up soirée </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Make'up mariée + essai </label>
                              </div>
                      </div>
                      <div class="prod">
                              <h6> Forfaits : </h6>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi-jambes + aisselles (ou maillot simple) </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi-jambes + maillot bréslien </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi-jambes + aisselles + maillot simple </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Demi-jambes + aisselles + maillot brésilien  </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Jambes entières + aisselles (ou maillot simple) </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Jambes entières + maillot brésilien </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Jambes entières + aisselles + maillot simple </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Jambes entières + aisselles + maillot brésilien </label>
                              </div>
                              <div class="pr">
                                  <input type="checkbox" value="Prestations"required>
                                  <label for=""> Sourcils + lévres </label>
                              </div>
                      </div>
              
                              
                              
                              
                              
                              
                              
                              
                     </div>
                     <!--  <textarea name="" id="" cols="70" rows="10" placeholder="Écrivez vos Prestations ..." ></textarea> -->
                     <div class="SectionTroisBlockbtn">
                        <a href="./merci.html" >
                            <button class="SectionTroisBtn"> Envoyer </button>
                        </a>
                    </div>
              </div>
       
      
      </section>
      @endsection