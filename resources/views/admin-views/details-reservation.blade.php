@extends("admin-views.layout")
@section("mail")
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>{{ Auth::user()->name }}</h1>
					<ul class="breadcrumb">			
						<li>
							<a class="active" href="{{ route('dashboard') }}">Details reservation</a>
						</li>
					</ul>
				</div>
			
			</div>

			


			<div class="table-data">
				<div class="order">
					<p>
						<span><strong>NOM DU CLIENT:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>

					<p>
						<span><strong>ADRESSE DU CLIENT:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>

					<p>
						<span><strong>NUMERO DU CLIENT:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>

					<p>
						<span><strong>DATE DE RENDEZ6VOUS SHOUHAIT&Eacute;:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>

					<p>
						<span><strong>DATE DE RESERVATION:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>

					<p>
						<span><strong>NOM CLIENT:</strong>:</span>
						<span>Kre kadjo michael</span>

					</p>
				</div>
				
			</div>



			





			

		</main>
		<!-- MAIN -->
	@endsection