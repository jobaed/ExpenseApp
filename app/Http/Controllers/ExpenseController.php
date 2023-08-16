<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;
use App\Models\Expense;
use App\Models\ExpenseCategories;
use Exception;
use Illuminate\Http\Request;

class ExpenseController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {

        $expense = Expense::with( ['ExpenseCategory'] )->get();

        $totalExpense = Expense::sum( 'amount' );
        $totalExpense = intval( $totalExpense );

        $expenseCategory = ExpenseCategories::all();

        return view( 'layouts.expense', compact( 'totalExpense', 'expense', 'expenseCategory' ) );
    }

    public function addexpense( Request $request ) {

        // return $request;
        try {
            Expense::updateOrCreate(
                ['id' => $request->update_id],
                [
                    'title'              => $request->title,
                    'expense_category_id' => $request->expense_category_id,
                    'description'        => $request->description,
                    'amount'             => $request->amount,
                    'expense_date'        => $request->expense_date,
                ] );

            return redirect()->back()->with( 'message', 'Success' );


        } catch ( Exception $e ) {
            return $e;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( StoreExpenseRequest $request ) {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( Expense $expense ) {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Expense $expense ) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( UpdateExpenseRequest $request, Expense $expense ) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Expense $expense ) {
        $expense->delete();

        return redirect()->back()->with( 'message', 'Record deleted successfully' );
    }
}
