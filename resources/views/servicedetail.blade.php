@extends('layout')
@section('videoarriereplan','Videos/SoinDuVisageHeader.mp4')
@section('contenuprincipal')


    <section id="SectionUneSoinVisage" data-aos="zoom-in">

        <h1>Nos offres : </h1>
        <p> Laissez-vous tenter pour un moment de détente inoubliable ! </p>
    </section>


    <!-- --------------------- FIN SECTION UNE  --------------- -->


    <!-- --------------------- SECTION DEUX  --------------- -->


    <section id="SectionDeuxSoinVisage">

        <div class="contenairFormule">


            <div class="ImageFormule" data-aos="zoom-in">
                <img src="./image/Soin1.jpg" width="450" alt="">
            </div>

            <div class="TextFormule" data-aos="zoom-in">
                <h1 class="FormuleTitre"> Soin Nettoyant : </h1>
                <p class="FormuleDescri">
                    Le soin Nettoyant réalisé par Ns.Beauty permet de Purifier en profondeur <br>
                    et de Matifier les peaux grasses, <br>
                    avec ou sans imperfections cutanées.

                </p>
                <p class="FormuleDuree">
                    Durée du soin : <span> <strong> 30 min </strong> </span> <span class="space"> -- </span> Prix : <span>
                        <strong> 30€ </strong></span>
                </p>
                <p class="FormulePrix"> </p>
                <a class="FormuleBtn" href="./FormPrisedeRDV/IndexSoinDuVisage.html">
                    Réserver
                </a>
            </div>



        </div>

    </section>

    <section id="SectionTroisSoinVisage">
        <p class="SectionTroisSoinVisageTitre"> Faite vous plaisir avec un soin du visage naturelle à votre image.

            <br>


        </p>
    </section>

    <section id="SectionQuatreSoinVisage">

        <div class="contenairFormule  contenairFormuleResponsive">



            <div class="TextFormule" data-aos="zoom-in">
                <h1 class="FormuleTitre">Soin Hydratant</h1>
                <p class="FormuleDescri">
                    Hydratant et rééquilibrant, Ns.Beauty vous conseille de réaliser ce soin, <br>
                    qui convient à tous les types de peaux <br>
                    qu'elle soit normale, mixte, sensible ou sèche.
                </p>
                <p class="FormuleDuree">
                    Durée du soin : <span> <strong> 45min </strong> </span> <span class="space"> -- </span> Prix : <span>
                        <strong> 50€ </strong></span>
                </p>
                <p class="FormulePrix"> </p>
                <a class="FormuleBtn" href="./FormPrisedeRDV/IndexSoinDuVisage.html">
                    Réserver
                </a>
            </div>

            <div class="ImageFormule" data-aos="zoom-in">
                <img src="./image/soin2.jpg" width="450" alt="">
            </div>

        </div>
    </section>

    <section id="SectionCinqSoinVisage">
        <p class="SectionCinqSoinVisageTitre"> Osez vous détendre, le temps d'un instant. <br>


        </p>
    </section>


    <section id="SectionSixSoinVisage">

        <div class="contenairFormule">


            <div class="ImageFormule" data-aos="zoom-in">
                <img src="./image/Soin3.jpg" width="450" alt="">
            </div>

            <div class="TextFormule" data-aos="zoom-in">
                <h1 class="FormuleTitre">Soin sur mesure </h1>
                <p class="FormuleDescri">
                    Ns.Beauty adapte son soin traitant sur mesure personnalisé en fonction des besoins.
                </p>
                <p class="FormuleDuree">
                    Durée du soin : <span> <strong> 1 Heure </strong> </span> <span class="space"> -- </span> Prix : <span>
                        <strong> 80€ </strong></span>
                </p>
                <p class="FormulePrix"> </p>
                <a class="FormuleBtn" href="./FormPrisedeRDV/IndexSoinDuVisage.html">
                    Réserver
                </a>
            </div>



        </div>

    </section>
@endsection
