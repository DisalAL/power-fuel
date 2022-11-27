<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//If there is time
// Route::get('/register-admin',function(){
//     return 'Registration Page';
// });

//ADMIN LEVEL
Route::get('/login-admin',function(){
    return 'Login Admin Page';
});

Route::get('/head-office-dashboard',function(){
    return 'Head Office View';
});

Route::get('/head-office/dispatch',function(){
    return 'Head Office View';
});

Route::get('/admin',function(){
    return 'Admin Panel';
});

Route::get('/admin/inventory',function(){
    return 'Inventory view';
});

//USER LEVEL
Route::get('/',function(){
    return 'Home Page';
});

Route::get('/register', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/request-fuel',function(){
    return 'Request Fuel page';
});

Route::get('/payment',function(){
    return 'Home Page';
});




