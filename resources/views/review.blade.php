<!-- extend layout -->
@extends('master')
<!-- titulo de la pagina -->
@section('title', 'Home')
<!-- css page -->
@section('css')
@stop
<!-- MySectionHome -->
@section('content')
	<h1>Reviews</h1>
		<ul>
			<li>lista</li>
			<li>lista</li>
			<li>lista</li>
			<li>lista</li>
		</ul>
@endsection
<!-- js section -->
@section('js')
     @parent
@stop