@extends('default')

@section('content')

<h1> raccourcir un nouveau lien </h1>

<form action="{{route('links.store') }}" method="post">
	<div class="form-group">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="url">Lien à raccourcir</label>
		<input type="text" name="url" id="url" placeholder="http://..." class="form-control">
	</div>

	<div class="form-group">
		<button class="btn btn-primary"> Raccourcir</button>
	</div>

	
</form>

@stop