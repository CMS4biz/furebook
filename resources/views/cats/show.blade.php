@extends('layouts.master');
@section('header')
	<h2>Cat page</h2>
@stop
@section('content')
	<p>Hello, I 'm {{$cat->name}}</p>
	
@stop