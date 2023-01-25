@extends('app')

@section('title','About-Us | '.config('app.name'))


@section('content')


      <img src="{{asset("/img/lez.png")}} " alt="Lezard" class="my-12
      shadow-md"/>

      <h2 class="mb-5 text-gray-700">
            Built witch <span class="text-pink-500">&hearts;</span> by JAAM .
      </h2>

      <p>
            <a href="{{ route('home') }}" class="text-indigo-500
            hover:text-indigo-600 underline">Revenir à la page d'acceuil </a>
      </p>


@endsection