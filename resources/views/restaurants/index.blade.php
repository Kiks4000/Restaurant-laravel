@extends('layout.app')

@section('title','Welcome to the Restaurant')

@section('content')

<h1>page de tous les restaurants</h1>

@foreach ($restaurant as $r)

<div>
    <h5>{{$r->name}}</h5>
    <p>{{$r->description}}</p>
    <a href="/restaurants/{{$r->id}}">voir</a>
</div>

@endforeach

<br>
<br>
<br>
<a href="/">back</a>

@endsection