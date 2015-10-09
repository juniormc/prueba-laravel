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

	<br><br><br>
	@if(count($errors) > 0)
		<div style="color:red">
			@foreach($errors->all() as $error)
				<p>{!!$error!!}</p>	
			@endforeach
		</div>
	@endif
	@if(Session::has('message-error'))
		<div style="color:red">
			<p>{{Session::get('message-error')}}</p>
		</div>	
	@endif

	<h2>Login</h2>
	{!!Form::open(['route' => 'log.store', 'method' => 'POST'])!!}
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