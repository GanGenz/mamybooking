<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{

    public function index()
    {
        $car = Car::where('active',1)->get();

        // dd($car);
        return  view('car',array('car'=>$car));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
