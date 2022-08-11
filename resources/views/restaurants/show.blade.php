
@extends('layout.app')

@section('title','Welcome to the Restaurant')

@section('content')

<p>Name : {{$restaurant->name}}</p>
<p>Description : {{$restaurant->description}}</p>
<p>Address : {{$restaurant->address}}</p>
<p>ZipCode : {{$restaurant->zipCode}}</p>
<p>Town : {{$restaurant->town}}</p>
<p>Country : {{$restaurant->country}}</p>
<p>Review : {{$restaurant->review}}</p>
<p>Created at : {{$restaurant->created_at}}</p>
<p>Updated at : {{$restaurant->updated_at}}</p>
<br>
<br>
<a href="/restaurants/{{$restaurant->id}}/edit">Edit</a>
<br>

<form action="/restaurants/{{$restaurant->id}}" method="POST" >
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete">
</form>

<a href="/restaurants">back</a>

@endsection