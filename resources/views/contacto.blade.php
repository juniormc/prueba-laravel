<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	<h1>Contacto</h1>
	<p>Este es el formulario para contactarnos</p>
	<form action="">
		<input type="text" placeholder="Nombre">
		<input type="text" placeholder="Email">
		<input type="text" placeholder="Mensaje">
		<button>Enviar</button>
	</form>
@endsection
<!-- js section -->
@section('js')
     @parent
@stop