@extends('layout')
@section('videoarriereplan',asset('Videos/ReservationHeader.mp4'))
@section('contenuprincipal')

<section id="SectionUneHistoire">
    <div class="SectionUneDivTexteHistoire" data-aos="zoom-in">
      <h2>{{ $service_details->titre }}</h2>
      <p> {!! $service_details->description !!}
        </p>

          
           
       

    </div>
    <div class="SectionUneDivImageHistoire" data-aos="zoom-in">
        <img src="{{ asset($service_details->image) }}" width="400" alt="">
    </div>

</section>
<form action="{{ route('enregister.reservation.service', $service_details->id) }}" method="POST" id="reservation-form">

    @csrf
<section id="Formulaire">
<div class="contenairblabla">
<div class="NomPrenomtexte">
<h1>Nom</h1>
<h1>Prenom</h1>
</div>

<div class="NomPrenom">
    
<input type="text" placeholder="nom" name="nom" required>
<input type="text" placeholder="Prénoms" name="prenoms" required>
</div>
<div class="NumeroAdresseTexte">
    <h1>Numero</h1>
    <h1>Adresse complète </h1>
   
    </div>
    <div class="NumeroAdresse">
        <input type="tel" placeholder="Numéro" name="numero" required>
        <input type="text" placeholder="Adresse" name="adresse" required>
        </div>
        <div class="dateheuretext">
            <h1>Date Souhaitée</h1>
            <h1>Heure Souhaitée</h1>  
        </div>
        <div class="DateHeure" >
          <input type="date" name="date_rdv" required>
          <input type="time" min="09:00" max="19:00" name="heure_rdv" required>
        </div>
        <div id="reservation-form-error" class="form-msg form-error-msg" style="display: none">
            Une erreur est survenue lors de la soumission de votre requête. Veuillez réessayer s'il vous plaît !  
            </div>
            <div id="reservation-form-status" class="form-msg form-success-msg" style="display: none">
              Votre reservation pour <strong>{{ $service_details->titre }}</strong> vient d'être enregistré, nous vous contacterons pour la validation de votre reservation  
            </div>

                     <!--  <textarea name="" id="" cols="70" rows="10" placeholder="Écrivez vos Prestations ..." ></textarea> -->
                     <div class="SectionTroisBlockbtn" >
                            <button type="submit" class="SectionTroisBtn"> Envoyer </button>
                    </div>
              </div>
       
      
      </section>
    </form>

      @endsection