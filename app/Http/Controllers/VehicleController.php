<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function index(){
        $user_id = auth()->user()->id;
        return view('pages/vehicles/index',[
            'vehicles' => Vehicle::all()->where('user_id',$user_id)
        ]);
    }

    public function show(Vehicle $vehicle){
        return view('pages/vehicles/order',['vehicle'=>$vehicle]);
    }

    public function store(Request $request){
        $formFields = $request->validate([    
            'name' => 'required',
            'reg_no' => ['required',Rule::unique('vehicles','reg_no')],
            'user_id' => 'nullable'
        ]);
        $vehicle = Vehicle::create($formFields);

        return back()->withStatus('Vehicle Added to Database.');

        // if($vehicle){
        //     return back()->withStatus('Vehicle Added to Database.');
        // }else{
        //     return back()->withStatus('Vehicle already added to database.');
        // }
        // Coudnt find a way to show error msg when same car is already added to the database.

        
    }

    public function order(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'amount' => 'required',
            'vehicle_id' => 'nullable',
        ]);


        Order::create($formFields);
    }
}
