<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	{!!Form::open(array('route' => 'usuario.store'))!!}
		{!!Form::label('Nombre');!!}
		<br>
		{!!Form::text('name');!!}
		<br><br>
		{!!Form::label('Email');!!}
		<br>
		{!!Form::text('email');!!}
		<br><br>
		{!!Form::label('Password');!!}
		<br>
		{!!Form::password('password');!!}
		<br><br>
		{!!Form::submit('Registro');!!}
	{!!Form::close()!!}
@endsection
<!-- js section -->
@section('js')
     @parent
@stop