
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


			<div class="right">
				<h5> Créer un compte</h5>
				<p>Vous n'avez pas encore de compte ? <a href="#">Crée un compte</a></p>
				<form method="POST" action="{{ route('register') }}">
                    @csrf

				<div class="inputs">
					<input type="text" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                    <p>
                        @error("name")
                        <span style="color: red">{{ $message }}</span>
                @enderror
                    
                    </p>
					<br>
                    <input type="text" placeholder="email" name="email" value="{{ old('email') }}" required>
                    <p>
                        @error("email")
                        <span style="color: red">{{ $message }}</span>
                @enderror
                    </p>
					<br>
                    <input type="password" placeholder="mot de passe" name="password" required autocomplete="new-password">
                    <p>
                        @error("password")
                        <span style="color: red">{{ $message }}</span>
                @enderror
                    
                    </p>
                    <br>
					<input type="password" placeholder="Confirmation mot de passe" name="password_confirmation" required autocomplete="new-password">
                    <p>
                        @error("password_confirmation")
                        <span style="color: red">{{ $message }}</span>
                @enderror
                    
                    </p>
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