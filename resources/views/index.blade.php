@extends('base')

@section('title','home')

@section('content')


<div class="container" style="background: azure; border-radius:10px;">
<a href="/create" class="btn btn-outline-success">Add new car</a>



<table class="table table-hover ">
    <tr>
        <th>Name</th>
        <th>Color</th>
        <th>Company</th>
        <th class="text-center">Action</th>
    </tr>
    @foreach($cars as $car)
    <tr>
        <td><a href="/show/{{$car->id}}">{{$car->name}}</a></td>
        <td>{{$car->color}}</td>
        <td>{{$car->company}}</td>
        <td class="text-center">
            <a href="/edit/{{$car->id}}" class="btn btn-warning">Edit</a>
            <a href="/delete/{{$car->id}}" class="btn btn-primary">Delete</a>
        </td>
    </tr>
    @endforeach

    


</table>



</div>
    
@endsection