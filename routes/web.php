<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

/*oldalak*/
Route::get('/', function () { return view('index'); });
Route::get('/gepek', function () { return view('gepek'); });
Route::get('/kapcsolatok', function () { return view('kapcsolatok'); });
Route::get('/vasarlas', function () { return view('vasarlas'); });
Route::get('/cikkek', function () { return view('cikkek_etrend'); });
/*  Route::get('/bejelentkezes', function () { return view('bejelentkezes'); });
    Route::get('/berletvasarlas', function () { return view('berletvasarlas'); });
    Route::get('/elfjelszo', function () { return view('elfjelszo'); });
    Route::get('/regisztracio', function () { return view('regisztracio'); });      */

/*apik*/
Route::get('/api/task/search', [TaskController::class, 'keres']);
Route::get('/api/task/sort', [TaskController::class, 'rendez']);
Route::delete('/api/task/{id}', [TaskController::class, 'adatTroles']);
Route::put('/api/task/{id}', [TaskController::class, 'adatFrissites']);
Route::get('/api/task/{id}', [TaskController::class, 'egyAdat']);
Route::post('/api/task', [TaskController::class, 'adatFelvetel']);
