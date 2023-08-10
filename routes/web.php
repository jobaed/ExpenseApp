<?php

use App\Http\Controllers\ExpenseCategoriesController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeCategoriesController;
use App\Http\Controllers\IncomeController;
use App\Http\Middleware\Authenticate;
use App\Models\IncomeCategories;
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

Route::get( '/', function () {
    return view( 'welcome' );
} );

Auth::routes();

Route::group( ['middleware' => ['auth']], function () {
    Route::get( '/dashboard', [App\Http\Controllers\HomeController::class, 'index'] )->name( 'dashboard' );
    Route::get( '/income', [IncomeController::class, 'index'] )->middleware( Authenticate::class );
    Route::get( '/expence', [ExpenseController::class, 'index'] )->middleware( Authenticate::class );
    Route::get( '/income-category', [IncomeCategoriesController::class, 'catIncomePage'] )->middleware( Authenticate::class );
    Route::get( '/expense-category', [ExpenseCategoriesController::class, 'catIncomePage'] )->middleware( Authenticate::class );
    Route::post( '/income-category', [IncomeCategoriesController::class, 'addCategory'] )->name('store.income.category')->middleware( Authenticate::class );
    Route::delete( '/income-category/{id}', [IncomeCategoriesController::class, 'deleteCategory'] )->name('delete.income.category')->middleware( Authenticate::class );
    Route::post( '/expense-category', [ExpenseCategoriesController::class, 'addCategory'] )->name('store.income.category')->middleware( Authenticate::class );
    Route::delete( '/expense-category/{id}', [ExpenseCategoriesController::class, 'deleteCategory'] )->name('delete.income.category')->middleware( Authenticate::class );



    Route::post( '/add-income', [IncomeController::class, 'addIncome'] )->name('store.income')->middleware( Authenticate::class );
    Route::post( '/add-expense', [ExpenseController::class, 'addexpense'] )->name('store.expense')->middleware( Authenticate::class );
} );
    

