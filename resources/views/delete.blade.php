@extends('base')

@section('title','show')

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


@section('content')


<div class="container">
<div class="content">
    <h3>Are you sure you want to delete {{$car->name}}?</h3>
    <form action="/delete/{{$car->id}}" method="post">
        @csrf
        @method('delete')
    <a href="/cars" class="btn btn-warning">Cancel</a>
    <button type="submit" class="btn btn-success">Delete</button>
    </form>
</div>

</div>
    
@endsection