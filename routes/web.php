<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::get('/income',[IncomeController::class,'index'])->middleware(Authenticate::class);
Route::get('/expence',[ExpenseController::class,'index'])->middleware(Authenticate::class);


