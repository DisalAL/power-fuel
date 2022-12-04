<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users/register');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'user_name' => ['required','min:3'],
            'email' => ['required','email', Rule::unique('users','email')],
            'contact_no' => ['required','min:10'],
            'password' => 'required | confirmed | min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $customer = Customer::create($formFields);

        //Login
        auth()->login($customer);

        return redirect('/')->with('message','User created successfully');
    }
}
