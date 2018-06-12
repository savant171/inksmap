@extends('template')

@section('css-class')

    page-tatoueur

@endsection

@section('titre')

    Le tatoueur

@endsection


@section('contenu')

	<h2>Le tatoueur n°{{ $numero }}</h2>
	<p>{{ $tatoueur->nom }} {{ $tatoueur->prenom }} - {{ $tatoueur->adresse }}</p>
	<p>{{ $tatoueur->nomComplet() }}</p>

@endsection