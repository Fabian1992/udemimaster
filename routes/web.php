<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\DB;

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
DB::listen(function($query){
    echo "<pre>{$query->sql}</pre>";
});

Route::get('job', function () {
    dispatch(new App\Jobs\SendEmail);
    return "Listo";
});
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/portafolio',[PortafolioController::class,'index'])->name('portafolios');
Route::post('/portafolio/store',[PortafolioController::class,'store'])->name('portafolios.store');

Route::get('users-cache',[UsersController::class,'index'])->name('users-cache');
Route::get('users',[UsersController::class,'indexuser'])->name('users');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
