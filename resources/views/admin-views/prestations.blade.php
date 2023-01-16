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

			


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Liste des préstations </h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Titre</th>
								<th>Description</th>
								<th>Catégorie</th>


								<th>Prix</th>
								<th>Durée</th>
							</tr>
						</thead>
						<tbody>

                            @foreach ($prestations as $prestation)
                            <tr>
								<td>
									<p>{{ $prestation->titre }}</p>
								</td>
								<td>{!! $prestation->description !!}</td>
								<td>{{ $prestation ->categorie->titre  }}</td>
								<td>{{ $prestation->prix }}&euro;</td>

								<td>{{ $prestation->duree }}></td>
							</tr>
                            @endforeach 
							
							
						</tbody>
					</table>
					
				</div>
				
			</div>



			






		

		</main>
		<!-- MAIN -->
	@endsection