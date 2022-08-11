

@extends('layout.app')

@section('title','Welcome to the Restaurant')

@section('content')

<h1>page de creation de restaurant</h1>

<form action="/restaurant" method="POST">
    @csrf
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
    </div>
    <div>
        <label for="zipCode">ZipCode</label>
        <input type="text" name="zipCode" id="zipCode">
    </div>
    <div>
        <label for="town">Town</label>
        <input type="text" name="town" id="town">
    </div>
    <div>
        <label for="country">Country</label>
        <input type="text" name="country" id="country">
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <p>Review note :</p>
        <label for="review">1</label>
        <input type="radio" name="review" id="review" value="1">

        <label for="review">2</label>
        <input type="radio" name="review" id="review" value="2">

        <label for="review">3</label>
        <input type="radio" name="review" id="review" value="3">

        <label for="review">4</label>
        <input type="radio" name="review" id="review" value="4">

        <label for="review">5</label>
        <input type="radio" name="review" id="review" value="5">
    </div>
    <div>
        <input type="submit" value="Create">
    </div>
</form>


<br>
<br>
<br>
<a href="/">back</a>

@endsection