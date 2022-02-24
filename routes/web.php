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

Route::get('/', function () {
    return view('Nav.home');
});
Route::get('about', function () {
    return view('Nav.about');
});
Route::get('contact', function () {
    return view('Nav.contact');
});
Route::get('HealthInsurance', function () {
    return view('Nav.InsuranceType.health');
});
Route::get('BikeInsurance', function () {
    return view('Nav.InsuranceType.bike');
});
Route::get('CarInsurance', function () {
    return view('Nav.InsuranceType.car');
});

Route::get('login', function () {
    return view('login');
});
Route::post('login',[UserController::class,'login']);

Route::get('registration', function () {
    return view('registration');
});

Route::post('registration',[UserController::class,'registration']);

