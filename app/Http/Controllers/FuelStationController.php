<?php

namespace App\Http\Controllers;

use App\Models\FuelStation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class FuelStationController extends Controller
{
    //All Customers
    public function index(){

        if(!Gate::allows('isHeadOffice')){
            abort(404, "Sorry, you do not have access to this page!");
        }

        return view('pages/fuel-stations/index',[
            'fuelstations' => FuelStation::all()
        ]);
    }

    public function edit(FuelStation $fuelStation){
        
        return view('pages/fuel-stations/edit-stock',['fuelStation' => $fuelStation]);
    }

    public function updateStock(Request $request){
        $id = $request->branch_id;
        $new_amount = $request->new_amount + $request->old_amount;
        DB::table('fuel_stations')->where('id',$id)->update(['stock' => $new_amount]);
    }

    //Should be automated
    public function decreaseStock(Request $request){
        $id = $request->branch_id;
        $new_amount = $request->existing_amount - $request->new_amount;
        DB::table('fuel_stations')->where('id',$id)->update(['stock' => $new_amount]);
    }

    
}
