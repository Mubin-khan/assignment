<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
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

 Route::get('/', [RegistrationController::class, 'index']);
 Route::get('/secondStep', [RegistrationController::class, 'index2']);
 Route::get('/finalStep', [RegistrationController::class, 'index3']);
 Route::post('/storeit', [RegistrationController::class, 'store1']);
 Route::post('/storeit2', [RegistrationController::class, 'store2']);

 Route::get('/finalStore', [RegistrationController::class, 'finalStore']);
