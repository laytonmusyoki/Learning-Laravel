<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=request()->validate([
            'name'=>'required',
            'color'=>'required',
            'company'=>'required',
        ]);
        /* $car = new Car;
        $car->name=request('name');
        $car->color=request('color');
        $car->company=request('company');
        $car->save(); */
        Car::create($validatedData);
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('update',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $validatedData=request()->validate([
            'name'=>'required',
            'color'=>'required',
            'company'=>'required',
        ]);
        /* $car->name=request('name');
        $car->color=request('color');
        $car->company=request('company'); */
        $car->update($validatedData);
        return redirect('/cars');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }

    public function delete(Car $car)
    {
        return view('delete',compact('car'));
    }
}
