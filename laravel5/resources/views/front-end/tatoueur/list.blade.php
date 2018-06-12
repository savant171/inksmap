@extends('template')

@section('css-class') page-list-tatoueur @endsection

@section('titre')

    Les tatoueurs

@endsection


@section('contenu')

	<h2>Liste des tatoueurs</h2>
    <table>
		<tr>
			<th>Nom</th>
			<th>Prénom</th>
		</tr>
		
		@foreach($listTatoueur as $tatoueur)
			<tr>
				<td>{{$tatoueur->nom}}</td>
				<td>{{$tatoueur->prenom}}</td>
			</tr>
		@endforeach 
	</table>

@endsection