@extends('base')

@section('title','Update')

@section('content')
<style>
    
    .content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 400px;
        height: auto;
        padding: 10px;
        box-shadow: 2px 2px 10px black;
        border-radius: 25px 5px 25px 5px;
    }
    input{
        width: 100%;
        height: 40px;
        margin: 5px auto;
        border-radius: 5px;
        outline: none;
        padding-left: 5px;
    }
    button{
        padding: 5px 30px;
        border-radius: 5px;
        background: green;
        outline: none;
        border: none;
    }
</style>

<div class="content">
    <form action="/update/{{$car->id}}" method="post">
        @csrf
        @method('PUT')
    <h1 style="text-align: center;">Update car</h1>
    @if($errors->any())

    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach

    @endif

    <input type="text"  name="name" value="{{$car->name}}" placeholder="Enter name of the car">
    <input type="text" required name="color" value="{{$car->color}}" placeholder="Enter color of the car">
    <input type="text" required name="company" value="{{$car->company}}" placeholder="Enter the company">
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@endsection