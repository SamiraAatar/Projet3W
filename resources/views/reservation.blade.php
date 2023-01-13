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
<form action="" method="POST">

    @csrf
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
                     <!--  <textarea name="" id="" cols="70" rows="10" placeholder="Écrivez vos Prestations ..." ></textarea> -->
                     <div class="SectionTroisBlockbtn">
                        <a href="./merci.html" >
                            <button class="SectionTroisBtn"> Envoyer </button>
                        </a>
                    </div>
              </div>
       
      
      </section>
    </form>

      @endsection