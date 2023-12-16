<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car ;

class CarController extends Controller
{

    private $columns = ['title', 'description', 'published'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // if ($request) {
        //     return dd($request->request);
        // }else {
        //     return "No request" ;
        // }
        
        // $cars = new Car();
        // $cars->title = $request->title;
        // $cars->description = $request->description;
        // if (isset($request->published)) {
        //     $cars->published = 1;
        // }else {
        //     $cars->published = 0;
        // }
        
        // $cars->save();

        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        // return "data  added successfully";
        Car::Create($data);
        return redirect('cars');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('showCar',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        return view('updateCar',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($request->published);
        Car::where('id',$id)->update($data);
        return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
