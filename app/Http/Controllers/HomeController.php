<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Income;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $limitedIncomes = Income::with(['IncomeCategory'])->limit(5)->get();
        $limitedExpenses = Expense::with(['ExpenseCategory'])->limit(5)->get();


        $totalIncome = Income::sum('amount');
        $totalIncome = intval($totalIncome);
        
        $totalExpense = Expense::sum('amount');
        $totalExpense = intval($totalExpense);

        return view('home', compact('limitedIncomes','limitedExpenses','totalIncome','totalExpense'));
    }
}
