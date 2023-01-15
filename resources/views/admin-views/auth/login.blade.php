<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>























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
				<h5> Se Connecter</h5>
				<p>Vous n'avez pas encore de compte ? <a href="#">Crée un compte</a></p>
				<form action="">

				</form>
				<div class="inputs">
					<input type="text" placeholder="Identifiant">
					<br>
					<input type="password" placeholder="Mot de passe">
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