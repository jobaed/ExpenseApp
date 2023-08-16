<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeCategoriesController;
use App\Http\Controllers\ExpenseCategoriesController;
use App\Models\Expense;

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
    Route::get( '/dashboard', [HomeController::class, 'index'] )->name( 'dashboard' );
    Route::get( '/income', [IncomeController::class, 'index'] );
    Route::get( '/expence', [ExpenseController::class, 'index'] );
    Route::get( '/income-category', [IncomeCategoriesController::class, 'catIncomePage'] );
    Route::get( '/expense-category', [ExpenseCategoriesController::class, 'catIncomePage'] );
    Route::post( '/income-category', [IncomeCategoriesController::class, 'addCategory'] )->name( 'store.income.category' );
    Route::delete( '/income-category/{id}', [IncomeCategoriesController::class, 'deleteCategory'] )->name( 'delete.income.category' );
    Route::post( '/expense-category', [ExpenseCategoriesController::class, 'addCategory'] )->name( 'store.income.category' );
    Route::delete( '/expense-category/{id}', [ExpenseCategoriesController::class, 'deleteCategory'] )->name( 'delete.income.category' );

    Route::post( '/add-income', [IncomeController::class, 'addIncome'] )->name( 'store.income' );
    // Route::delete( '/delete-income/{id}', [IncomeController::class, 'destroy'] )->name('delete.income')->middleware( Authenticate::class );
    Route::resource( '/income', IncomeController::class );
    Route::resource( '/expense', ExpenseController::class );

    Route::post( '/add-expense', [ExpenseController::class, 'addexpense'] )->name( 'store.expense' );
} );
