@extends('layout')
@section('videoarriereplan','Videos/TestVideo.mp4')
@section('contenuprincipal')
    <section id="SectionUneIndex">
        <div class="SectionUneDivTexteIndex" data-aos="zoom-in">
            <h2>NS.Beauty</h2>
            <p> Ns.Beauty est la pour vous ! <br>
                Déplacement à domicile pour un moment de détente unique ! <br>
                Prenez soin de vous, personne le fera à votre place. <br>
                N'hésiter pas à réserver votre rendez-vous. </p>

        </div>

        <div class="SectionUneDivImageIndex" data-aos="zoom-in">
            <img src="image/imagesection2home.jpg" width="400" alt="">
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
                    <a class="btnOffre" href="{{ route("prestations") }}">
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
                                {{ $unecategorie ->description }}

                            </p>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
            

           

            

        </div>


        <div class="SectionTroisBlockbtn">
            <a href="{{route('prestations')}}">
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
                    <input class="tbox" type="email" name="" value="" placeholder="Entrez votre email">
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
@endsection
