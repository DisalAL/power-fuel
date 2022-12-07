<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CustomerController extends Controller
{
    //All Customers
    public function index(){
        if(!Gate::denies('isCustomer') ){
            abort(404, "Sorry, you do not have access to this page!");
        }

        return view('pages/customer-list',[
            'customers' => Customer::all()
        ]);
    }

    public function edit(){
        return view('pages/customer-list',[
            'customers' => Customer::all()
        ]);
    }

    
}
