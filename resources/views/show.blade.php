@extends('base')

@section('title','show')

@section('content')


<div class="container">
<h1>Show Car</h1>
<div style="color: {{$car->color}};">
    <h3>{{$car->name}}</h3>
    <strong>{{$car->company}}</strong>
</div>

<h2 style="position: fixed; bottom:10%;"><a href="/cars">Go back</a></h2>
</div>
    
@endsection