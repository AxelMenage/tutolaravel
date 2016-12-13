@extends('default')

@section('content')

	@foreach($posts as $post)
		
		<h1> {{ $post->title}} </h1>
		@if($post->category)
			<p><em>{{$post->category->name}}</em></p>
		@endif
		<p> {{ $post->content}} </p>
		<p> <a class="btn btn-primary" href="{{route('news.edit', $post)}}">Editer</a></p>
		

	@endforeach

@stop