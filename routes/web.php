<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

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

Route::get('/', function () {
    return view('welcome');
});

//Routes pour afficher le formulaire, enregistrer un rendez-vous
// et afficher le calendrier
Route::get('/', [AppointmentController::class, 'index']);
Route::get('/appointment/create', [AppointmentController::class, 'create']);
Route::post('/appointment', [AppointmentController::class, 'store']);
