<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	Usuarios registrados
	<br>
	<br>

	@if(Session::has('message'))
		<div style="color:red">
			{{ Session::get('message') }}
		</div>
		<br>
		<br>
	@endif
	
	<table border="1" style="width:100%">
		<tr>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operacion</th>
		</tr>
		@foreach ($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id)  !!}</td>
			</tr>
		@endforeach
	</table>
	<br>
	<br>
	<br>
	<br>
	<a href="{{URL::to('/usuario/create')}}">Crear</a>
@endsection
<!-- js section -->
@section('js')
     @parent
@stop