
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('admin-assets/style.css') }}">

	<title>Admin Projet3w</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="{{ route('dashboard') }}" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Ns Beauty</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="{{ route('dashboard') }}">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Accueil</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Prestation</span>
				</a>
			</li>
			{{--  --}}
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Mon compte</span>
				</a>
			</li>
			<li>

				<form method="POST" action="{{ route('logout') }}">
					@csrf
				<a href="{{ route('logout') }}" onclick="event.preventDefault();
				this.closest('form').submit();" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Déconnexion</span>
				</a>
				</form>

				
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="profile porfileUser">
				<img src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}">
			</a>
		</nav>
		<!-- NAVBAR -->

        @yield("mail")
    </section>
	<!-- CONTENT -->
	

	<script src="{{ asset("admin-assets/script.js") }}"></script>
</body>
</html>