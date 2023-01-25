@extends('app')

@section('title',env('APP_NAME'))


@section('content')

      <img src="{{asset('/img/village.jpg')}} "alt="Village" class="mt-4 rounded shadow-md h-21"/>

      <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600"> Salam wa Gay-i-Dior</h1>

      <p class="text-lg text-gray-800">It's currently {{ date('H:i ') }}.</p>

@endsection