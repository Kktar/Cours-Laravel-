@extends('app')

@section('title',env('APP_NAME'))


@section('content')

      <img src="{{asset('/img/village.jpg')}} "alt="Village"/>

      <h1> Salam wa Gay-i-Dior</h1>
      <p>It's currently {{ date('H:i ') }}.</p>

@endsection