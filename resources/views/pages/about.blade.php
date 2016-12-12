@extends("default")

@section('title', $title)


@section('content')

<!-- Echappe le code html -->
<h1> {{$title}} </h1>

<!-- Prend en compte le code html 
<h1> {!! $title !!} </h1>
-->

<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<ul>
	<!-- Comme un foreach mais permet de mettre un else si valeur pas définie -->
	@forelse($numbers as $number)
		<li> {{$number}} </li>
	@empty
		<li> Aucun chiffre </li>
	@endforelse
</ul>

@endsection


@section('sidebar')

@parent

<h3> A propos </h3>
<p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

@endsection