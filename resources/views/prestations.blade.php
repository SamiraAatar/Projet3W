@extends('layout')
@section('videoarriereplan','Videos/PrestationHeader.mp4')
@section('contenuprincipal')



<section id="SectionDeuxPrestation">

    <h1 class="SectionDeuxPrestationTitre">Nos offres </h1>
     <p class="SectionDeuxPrestationPara"> Laissez-vous tenter pour un moment de détente inoubliable ! </p>

    <div class="SectionDeuxPrestation-container">

        @foreach ( $listecategories as $unecategorie )
      <div class="card">

        <div class="ContenairCard">

          <div class="ImgCard">

            <img src="{{ $unecategorie ->image }}" alt="">

          </div>

          <div class="TexteCard">
            <div>
              <h2>{{ $unecategorie ->titre }} </h2>
              
              <p>
                {{ $unecategorie ->description }} <br>
                <a href="{{route("servicedetail",$unecategorie->id)}}">
                  <button class="TexteCardButton"> 
                    Voir Plus
                  </button>
                </a>
                </p>



            </div>
          </div>

        </div>

      </div>

      @endforeach

      

     

      

      <!-- <div class="card">

        <div class="ContenairCard">

          <div class="ImgCard">
            <img src="./image/ÉpilationsB.jpg" alt="">
          </div>

           <div class="TexteCard">
            <div>

              <h2>Nos Épilations</h2>
              
              <p>
                Découvrez nos épilations et laissez-vous emporter pour un moment de détente inoubliable. <br>
                <a href="./Epilations.html">
                  <button class="TexteCardButton">
                    Voir Plus
                  </button>
                </a>
                </p>

            </div>
          </div> 

        </div>

      </div> -->

     

    </div>
    
     

     <!--  <div class="card">

        <div class="ContenairCard">

          <div class="ImgCard">
            <img src="./image/mamanform3.png" alt="">
          </div>

          <div class="TexteCard">
            <div>

              <h2>Nos Forfaits : </h2>
              
              <p>
                Découvrez nos forfaits épilations et laissez-vous emporter pour un moment de détente inoubliable. <br>
                <a href="./Forfait.html">
                  <button class="TexteCardButton">
                    Voir Plus
                  </button>
                </a>
                </p>

            </div>
          </div>

        </div>

      </div> -->
    

  </section>
  @endsection
