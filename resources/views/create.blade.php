@extends('base')

@section('title','home')

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
    <form action="/create" method="post">
        @csrf
    <h1 style="text-align: center;">Add new car</h1>
    @if($errors->any())

    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach

    @endif


    <input type="text"  name="name" placeholder="Enter name of the car">
    <input type="text"  name="color" placeholder="Enter color of the car">
    <input type="text"  name="company" placeholder="Enter the company">
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@endsection