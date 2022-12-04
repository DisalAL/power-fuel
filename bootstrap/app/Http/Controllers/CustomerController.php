<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //All Customers
    public function index(){
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
