<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllRegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StateDistrictTalukaVillage;

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


Route::get('/',[HomeController::class,'homeDashboard']);
Route::get('registerasdashboard',[HomeController::class,'registerAsDashboard']);
Route::get('loginasdashboard',[HomeController::class,'loginAsDashboard']);

Route::get('register',[AuthController::class,'registerPage']);
// Route::get('fporegister',[AuthController::class,'fpoRegister']);
Route::get('login',[AuthController::class,'login']);
Route::get('fporegister',[StateDistrictTalukaVillage::class, 'index']);


Route::post('fpo/registration', [AllRegisterController::class,'fpo_registration'])->name('fpo/registration');
Route::post('login-fpo', [AllRegisterController::class, 'loginFpo'])->name('login-fpo');
Route::get('dashboard', [AllRegisterController::class, 'dashboardFpo']);
Route::post('get-district-by-states', [StateDistrictTalukaVillage::class,'getDistrict']);
Route::post('get-talukas-by-district', [StateDistrictTalukaVillage::class, 'getTaluka']);
Route::post('get-villages-by-talukas', [StateDistrictTalukaVillage::class, 'getVillage']);      