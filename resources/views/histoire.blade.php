@extends('layout')
@section('videoarriereplan', 'Videos/HistoireHeader.mp4')
@section('contenuprincipal')

    <section id="SectionUneHistoire">
        <div class="SectionUneDivTexteHistoire" data-aos="zoom-in">
            <h2>{{ $titre }}</h2>
            <p> NS.Beauty est une petite bulle de bien être qui se déplace chez vous, <br>
                selon vos envies et <strong>sans frais supplémentaires ! </strong> <br>

                Passionnée par l’esthétique depuis toujours,
                j’ai décidée de passer <br>
                mon CAP esthétique.

                Après avoir travaillé quelques années en institut, <br>
                Me voilà qui débarque chez vous,
                pour un moment de détente inoubliable ! <br>


                je me déplace avec mon matériel et ma bonne humeur <br> jusqu’à votre domicile.


                Située à Pontoise (95300), <br>
                je me déplace dans un périmètre d'environ 30 kilomètres <br>
                et vous propose un large choix de prestations. <br>

                <strong> N’hésiter plus, réserver votre rendez-vous.</strong> <br>
            </p>


        </div>
        <div class="SectionUneDivImageHistoire" data-aos="zoom-in">
            <img src="./image/Tanya.jpeg" width="400" alt="">
        </div>

    </section>



    <section id="SectionSloganHistoire" data-aos="zoom-in">
        <p>« Vous devez vous aimez et prendre soin de vous, car c’est alors
            que le meilleur sort. » </p>

    </section>
@endsection
