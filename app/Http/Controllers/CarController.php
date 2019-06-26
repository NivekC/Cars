<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class CarController extends Controller
{
    public function allcars() {
        $cars = Car::all(); 
        return $cars;
        dd($cars);
        return view('car.allcars',['cars' =>$cars]);
        
    }
    
    public function particularcar($id) {
    
    }
    
    public function newcar() {
    
    }
}

