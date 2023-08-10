<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Http\Requests\StoreIncomeRequest;
use App\Http\Requests\UpdateIncomeRequest;
use App\Models\IncomeCategories;
use Exception;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $incomes = Income::with(['IncomeCategory'])->get();

        $totalIncome = Income::sum('amount');
        $totalIncome = intval($totalIncome);

        $incomeCategory = IncomeCategories::all();


        return view('layouts.income', compact('totalIncome','incomes','incomeCategory'));
    }

    public function addIncome(Request $request){
        try{
            Income::create([
                'title'=>$request->title,
                'income_category_id'=>$request->income_category_id,
                'description'=>$request->description,
                'amount'=>$request->amount,
                'income_date'=>$request->income_date
            ]);

            return redirect()->back()->with('message', 'Added Income Record');
        }
        catch(Exception $e){
            return $e;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIncomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Income $income)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $income)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncomeRequest $request, Income $income)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $income)
    {
        //
    }
}
