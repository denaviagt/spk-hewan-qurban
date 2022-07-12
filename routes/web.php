<?php

use App\Http\Controllers\Analisa\AnalisaController;
use App\Http\Controllers\Animal\AnimalController;
use App\Http\Controllers\Perankingan\PerankinganController;
use App\Models\Criteria;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Auth::routes(['register' => false]);

Route::group([ 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        // return view('welcome');
        return view('dashboard.index');
    });

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });

    Route::get('/kriteria', function () {
        return view('kriteria.index', ["data" => Criteria::all()]);
    });
    Route::get('/hewan', [AnimalController::class, 'index']);
    Route::get('/hewan/add', [AnimalController::class, 'create']);
    Route::post('/hewan/add', [AnimalController::class, 'store']);

    Route::get('/perankingan', [PerankinganController::class, 'index']);
    Route::get('/analisa', [AnalisaController::class, 'index']);
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
