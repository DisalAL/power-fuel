<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\HeadOffice;
use Illuminate\Http\Request;

//Originally this controller handled the Logins but was then switched to the CustomerController. This was done due to time constraints
//and assumption that the Manager and HeadOffice users are pre defined.
class RegisterController extends Controller
{
    
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'contact_no' => 'required|min:5|max:15'
        ]);

        //dd(request()->all());

        if(request()->user_type == null){
            $user = User::create($attributes);
            // $customer = Customer::create($attributes);
            auth()->login($user);
        }else{
            //Incomplete: As of writing the Admin and Manager logins are predefined.
            $user = User::create($attributes);
            auth()->login($user);
            // $head_office = HeadOffice::create($attributes);
        }
        
        
        return redirect('/dashboard');
    } 
}
