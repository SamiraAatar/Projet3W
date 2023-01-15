<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('admin-assets/style-login.css') }}">

</head>

<body>

	<section>


		<div class="box-form">
			<div class="left">
				<div class="overlay">
					<h1>Ns.Beauty.</h1>
					<p>Connecter-vous afin de pouvoir prendre rendez-vous pour la
						prestation de votre choix.
					</p>

				</div>
			</div>



            <form method="POST" action="{{ route('login') }}">
                @csrf
    

			<div class="right">
				<h5> Se Connecter</h5>
				<p>Entrer vos paramètres de connexion pour accéder à votre tableau de bord</p>
				<form method="POST" action="{{ route('login') }}">
                    @csrf

				<div class="inputs">
					<input type="text" placeholder="adresse mail" name="email" :value="old('email')" required autofocus>
					<br>
					<input type="password" placeholder="Mot de passe" name="password" required autocomplete="current-password">
				</div>

				<br><br>

				<div class="remember-me--forget-password">

					<label>
						<input type="checkbox" name="item" checked />
						<span class="text-checkbox">Se souvenir de moi</span>
					</label>
					<p>Mot de passe oublié ?</p>
				</div>

				<br>
				<button type="submit">Se connecter</button>
				</form>
			</div>

		</div>

	</section>
</body>

</html>