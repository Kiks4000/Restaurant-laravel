@extends('layout.app')

@section('title','Welcome to the Restaurant')

@section('content')

    <h1>Welcome to the Laravel Framework</h1>
<br>
<br>
    <a href="/restaurants">Restaurants</a>
<br>
<br>
    <a href="/restaurants/1">Restaurant 1 Details</a>
<br>
<br>
    <a href="/restaurants/2">Restaurant 2 Details</a>
<br>
<br>
    <a href="/restaurants/create">Create a Restaurant</a>

@endsection