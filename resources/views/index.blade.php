<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	<h1>Index</h1>
	<br>
	<a href="{{URL::to('/')}}">Home</a>
	<a href="{{URL::to('/review')}}">Reviews</a>
	<a href="{{URL::to('/contacto')}}">Contacto</a>
@endsection
<!-- js section -->
@section('js')
     @parent
@stop