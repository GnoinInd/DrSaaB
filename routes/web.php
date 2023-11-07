<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\aboutController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/index', [homecontroller::class, 'index'])->name('index');
route::get('/dashboard/hospitals', [homecontroller::class, 'Hospitals'])->name('hospitals');
route::get('/doctors', [homecontroller::class, 'Doctors'])->name('doctors');
route::get('/patholabs', [homecontroller::class, 'Patholabs'])->name('patholabs');
route::get('/clinics', [homecontroller::class, 'Clinics'])->name('clinics');
route::get('/bmicalculator', [homecontroller::class, 'bmiCalculator'])->name('bmicalculator');
route::get('/pregnancycal', [homecontroller::class, 'Pregnancycal'])->name('pregnancycal');
route::get('/bodyfatcal', [homecontroller::class, 'Bodyfatcal'])->name('bodyfatcal');

// USER DASHBOARD
route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');





route::get('/index1', [homecontroller::class, 'index1']);
route::get('/about', [aboutController::class, 'about']);
route::post('/about', [aboutController::class, 'sendData'])->name('sendData');