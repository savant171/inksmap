@extends('template')

@section('contenu')
    {!! Form::open(['url' => 'tatoueur/postTatoueur']) !!}
        {!! Form::label('nom', 'Entrez votre nom : ') !!}
        {!! Form::text('nom') !!}
		{!! Form::label('nom', 'Entrez votre prénom : ') !!}
        {!! Form::text('prenom') !!}
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection