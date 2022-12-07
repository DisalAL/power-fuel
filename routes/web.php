<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Common Resource Routes:
// index - Show all users/vehicles
// show - Show single user/vehicles NOT USED AS OF YET
// create - Show form to create new user/vehicle
// store - Store new user/vehicle
// edit - Show form to edit user/vehicle/quantity
// update - Update user/vehicle
// destroy - Delete user/vehicle  

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FuelStationController;
            

Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify'); 
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	//Custom Routes

	//Orders of customers - currently hardcoded.
    Route::get('customer-list',[CustomerController::class,'index'])->name('customer-list');
	//Load fuel stations
	Route::get('fuel-stations',[FuelStationController::class,'index'])->name('fuel-stations');
	//Open Edit Fuel station page
	Route::get('fuel-stations/{fuelStation}/edit',[FuelStationController::class,'edit']);
	//Send Update request to confirm change in DB
	Route::put('fuel-stations',[FuelStationController::class,'updateStock']);
	//Register vehicle request
	Route::post('register-vehicle',[VehicleController::class,'store']);
	//Load all vehicles onto the page
	Route::get('vehicles',[VehicleController::class,'index'])->name('vehicles');
	//Load Register a new vehicle page
	Route::get('register-vehicle', function () {
		return view('pages.vehicles.register-vehicle');
	})->name('register-vehicle');
	Route::get('vehicles/{vehicle}',[VehicleController::class,'show'])->name('vehicle');
	Route::post('order-confirmed',[VehicleController::class,'order'])->name('order-confirmed');
	// Route::get('payment-portal',[OrderController::class,'show'])->name('payment-portal');
	// //Custom Routes
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
	Route::get('payment',function(){
		return view('pages/orders/billing');
	});
	
});

//1. Create Customer Controller, only the model and table has been created.
//2. make a variable inside the controllers show() function (refer example-app ListingController@show function
//3. Use that variable inside the view