<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	<form action="">
		<label for="">Nombre</label>
		<input type="text">
		<br>
		<label for="">Correo</label>
		<input type="text">
		<br>
		<label for="">Contraseña</label>
		<input type="text">
		<br>
		<button>Registrar</button>
	</form>
@endsection
<!-- js section -->
@section('js')
     @parent
@stop