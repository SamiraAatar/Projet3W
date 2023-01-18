@extends('layout')
@section('videoarriereplan',asset('Videos/SoinDuVisageHeader.mp4') )
@section('contenuprincipal')


    <section id="SectionUneSoinVisage" >

        <h1>Nos offres : </h1>
        <p> Laissez-vous tenter pour un moment de détente inoubliable ! </p>
    </section>


    <!-- --------------------- FIN SECTION UNE  --------------- -->


    <!-- --------------------- SECTION DEUX  --------------- -->


    @foreach ($listeprestations as $uneprestation)
        
        <section id="SectionDeuxSoinVisage">

            <div class="contenairFormule">


                <div class="ImageFormule" data-aos="zoom-in">
                    <img src="{{ asset($uneprestation->image) }}" width="450" alt="">
                </div>

                <div class="TextFormule" data-aos="zoom-in">
                    <h1 class="FormuleTitre"> {{ $uneprestation->titre }} </h1>
                    <p class="FormuleDescri">
                        {!!$uneprestation->description !!}

                    </p>
                    <p class="FormuleDuree">
                        Durée du soin : <span> <strong> {{ $uneprestation->dure }} </strong> </span> <span class="space"> -- </span> Prix : <span>
                            <strong> {{ $uneprestation->prix }}€ </strong></span>
                    </p>
                    <p class="FormulePrix"> </p>
                    <a class="FormuleBtn" href="{{ route('reserve.service', $uneprestation->id) }}">
                        Réserver
                    </a>
                </div>



            </div>

        </section>
        @if($uneprestation->slogan)
            <section id="SectionTroisSoinVisage" style="background-image: url({{ asset($uneprestation->image_slogan) }})" >
                <p class="SectionTroisSoinVisageTitre">
                    {{ $uneprestation->slogan }}

                    <br>


                </p>
            </section>
        @endif
    @endforeach
@endsection
