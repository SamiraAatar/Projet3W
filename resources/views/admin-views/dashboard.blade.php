@extends("admin-views.layout")
@section("mail")
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>{{ Auth::user()->name }}</h1>
					<ul class="breadcrumb">			
						<li>
							<a class="active" href="{{ route('dashboard') }}">Accueil</a>
						</li>
					</ul>
				</div>
			
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Reservations en cours</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Reservations validées</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Total réservations</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des réservation en cours</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Client</th>
								<th>Prestation</th>
								<th>Date rendez-vous</th>


								<th>Date reservation</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($reservations_encours as $reservation)
                            <tr>
								<td>
									<p>{{ $reservation->nom." ".$reservation->prenoms }}</p>
								</td>
								<td>{{ $reservation->prestation->titre }}</td>
								<td>{{ \Carbon\Carbon::create($reservation->date_rdv." ".$reservation->heure_rdv)->isoFormat("LLLL")  }}</td>
								<td>{{ $reservation->date_reesrvation }}</td>

								<td><a href="{{ route('details.reservation', $reservation->id) }}"><span class="status pending">
									En cours
									</span></a></td>
							</tr>
                            @endforeach
							
							
						</tbody>
					</table>
					{{ $reservations_encours->links() }}
				</div>
				
			</div>



			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des réservation validées</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Client</th>
								<th>Prestation</th>
								<th>Date rendez-vous</th>


								<th>Date reservation</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($reservations_valide as $reservation)
                            <tr>
								<td>
									<p>{{ $reservation->nom." ".$reservation->prenoms }}</p>
								</td>
								<td>{{ $reservation->prestation->titre }}</td>
								<td>{{ \Carbon\Carbon::create($reservation->date_rdv." ".$reservation->heure_rdv)->isoFormat("LLLL")  }}</td>
								<td>{{ $reservation->date_reesrvation }}</td>

								<td><span class="status completed">Validé</span></td>
							</tr>
                            @endforeach
							
							
						</tbody>
					</table>
					{{ $reservations_valide->links() }}
				</div>
				
			</div>






			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des réservation annulées</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Client</th>
								<th>Prestation</th>
								<th>Date rendez-vous</th>


								<th>Date reservation</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($reservations_annuler as $reservation)
                            <tr>
								<td>
									<p>{{ $reservation->nom." ".$reservation->prenoms }}</p>
								</td>
								<td>{{ $reservation->prestation->titre }}</td>
								<td>{{ \Carbon\Carbon::create($reservation->date_rdv." ".$reservation->heure_rdv)->isoFormat("LLLL")  }}</td>
								<td>{{ $reservation->date_reesrvation }}</td>

								<td><span class="status canceled">Annulé</span></td>
							</tr>
                            @endforeach
							
							
						</tbody>
					</table>
					{{ $reservations_annuler->links() }}
				</div>
				
			</div>

		</main>
		<!-- MAIN -->
	@endsection