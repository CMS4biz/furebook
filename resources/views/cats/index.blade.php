@extends('layouts.master');
@section('header')
	<h2>all cats</h2>
@stop
@section('content')
	<p>show all cats</p>
	<table>
	<th>
		<tr>Naam kat</tr>
		<tr>Soort</tr>
	</th>
	@foreach ($cats as $cat)
	<tr>
		<td>{{$cat->name}}</td>
		<td>{{$cat->breed->name}}</td>
		<td><a href="/cats/{{$cat->id}}/edit">Bewerk</a></td>
		<td><a href="/cats/{{$cat->id}}/">Bekijk</a></td>
	</td>
	@endforeach
	</table>
@stop