@extends('layout.app')

@section('title','Welcome to the Restaurant')

@section('content')

<h1>Edit du restaurant</h1>

<form action="/restaurants/{{$restaurant->id}}" method="POST" >

    @csrf
    @method('PUT')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$restaurant->name}}">
        @if($errors->has('name'))
            <small class="error">{{ $errors->first('name') }}</small>
        @endif
    </div>
    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{$restaurant->address}}">
        @if($errors->has('address'))
            <small class="error">{{ $errors->first('address') }}</small>
        @endif
    </div>
    <div>
        <label for="zipCode">ZipCode</label>
        <input type="text" name="zipCode" id="zipCode" value="{{$restaurant->zipCode}}">
        @if($errors->has('zipCode'))
            <small class="error">{{ $errors->first('zipCode') }}</small>
        @endif
    </div>
    <div>
        <label for="town">Town</label>
        <input type="text" name="town" id="town" value="{{$restaurant->town}}">
        @if($errors->has('town'))
            <small class="error">{{ $errors->first('town') }}</small>
        @endif
    </div>
    <div>
        <label for="country">Country</label>
        <input type="text" name="country" id="country" value="{{$restaurant->country}}">
        @if($errors->has('country'))
            <small class="error">{{ $errors->first('country') }}</small>
        @endif
    </div>
    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{$restaurant->description}}">
        @if($errors->has('description'))
            <small class="error">{{ $errors->first('description') }}</small>
        @endif
    </div>
    <div>
        <p>Review note :</p>
        <label for="review">1</label>
        <input type="radio" name="review" id="review" value="1" @if($restaurant->review == 1) checked @endif>
    
        <label for="review">2</label>
        <input type="radio" name="review" id="review" value="2" @if($restaurant->review == 2) checked @endif>
    
        <label for="review">3</label>
        <input type="radio" name="review" id="review" value="3" @if($restaurant->review == 3) checked @endif>
    
        <label for="review">4</label>
        <input type="radio" name="review" id="review" value="4" @if($restaurant->review == 4) checked @endif>
    
        <label for="review">5</label>
        <input type="radio" name="review" id="review" value="5" @if($restaurant->review == 5) checked @endif>

        @if($errors->has('review'))
            <small class="error">{{ $errors->first('review') }}</small>
        @endif
    </div>
    <br>
    <div>
        <input type="submit" value="Edit">
    </div>

</form>

<br>
<br>
<a href="/restaurants/{{$restaurant->id}}">back</a>

@endsection