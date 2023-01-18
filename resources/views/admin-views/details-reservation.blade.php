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

			


			<div class="table-data" style="flex-direction: column">

				@if ($reservation->status == -1)
				<div class="alert alert-danger">
					Vous avez annuler cette réservation !
				</div>
				@endif
				@if($reservation->status == 1)
				<div class="alert alert-success">
					Cette reservation a déjà été confirmée !
				</div>
				@endif


				<div class="order">
					<p>
						<span><strong>NOM DU CLIENT:</strong>:</span>
						<span>{{ $reservation->nom }}</span>

					</p>

					<p>
						<span><strong>ADRESSE DU CLIENT:</strong>:</span>
						<span>{{ $reservation->adresse }}</span>

					</p>

					<p>
						<span><strong>NUMERO DU CLIENT:</strong>:</span>
						<span>{{ $reservation->numero }}</span>

					</p>

					

					

					<p>
						<span><strong>PRESTATION DEMANDEE:</strong>:</span>
						<span>{{ $reservation->prestation->titre }}</span>

						<hr>
					</p>


					<p>
						<span><strong>PRIX:</strong>:</span>
						<span>{{ $reservation->prix }} &euro;</span>

					</p>

					<p>
						<span><strong>DATE DE RENDEZ-VOUS SHOUHAIT&Eacute;:</strong>:</span>
						<span style="background-color: rgba(255, 236, 172, 0.541)">{{ \Carbon\Carbon::create($reservation->date_rdv)->isoFormat("LLLL") }}</span>

					</p>

					<p>
						<span><strong>DATE DE RESERVATION:</strong>:</span>
						<span>{{ \Carbon\Carbon::create($reservation->date_reesrvation)->isoFormat("LLLL") }}</span>

					</p>

					@if($reservation->status == 0)

					<div class="reservation-actions-btn">
						<button class="btn confirm" data-action="{{ route("confirm.reservation", $reservation->id) }}">Confirmer la reservation</button>
				<button class="btn canceled" data-action="{{ route("annuler.reservation", $reservation->id) }}">Annuler la reservation</button>
					</div>
					@endif
				</div>


				

				
			</div>



			





			

		</main>
		<!-- MAIN -->
	@endsection
	@push('pushscript')
		<script>
			var confirmBtn = document.querySelector(".reservation-actions-btn .btn.confirm")
			var cancelmBtn = document.querySelector(".reservation-actions-btn .btn.canceled")
			confirmBtn.addEventListener('click', (e)=>{
				if(confirm("Voulez-vous accepter cette réservation ?")){
					let confirmationpath= e.target.getAttribute("data-action")
					location.assign(confirmationpath)
				}
			})

			cancelmBtn.addEventListener('click', (e)=>{
				if(confirm("Vous êtes sur le point d'annuler cette reservation. Voulez-vous confirmer ?")){
					let cancelpath= e.target.getAttribute("data-action")

					location.assign(cancelpath)
				}
			})


		</script>
	@endpush