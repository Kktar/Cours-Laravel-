@extends('app')

@section('title','About-Us | '.config('app.name'))


@section('content')


      <img src="{{asset("/img/lez.png")}} " alt="Lezard"/>
      <p>Built witch &hearts; by JAAM .</p>

      <p><a href="{{ route('home') }}">Revenir à la page d'acceuil </a></p>


@endsection