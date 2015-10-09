<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	@if(count($errors) > 0)
		<div style="color:red">
			@foreach($errors->all() as $error)
				<p>{!!$error!!}</p>	
			@endforeach
		</div>
	@endif
{{-- edit --}}
	{!!Form::model($user, ['route' => ['usuario.update', $user->id], 'method'=>'PUT'])!!}
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
		{!!Form::submit('Actualizar');!!}
	{!!Form::close()!!}
{{-- delete --}}
	{!!Form::open(['route' => ['usuario.destroy', $user->id], 'method'=>'DELETE'])!!}
		{!!Form::submit('Eliminar');!!}
	{!!Form::close()!!}
@endsection
<!-- js section -->
@section('js')
     @parent
@stop