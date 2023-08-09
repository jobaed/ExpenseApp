<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategories;
use Illuminate\Http\Request;

class ExpenseCategoriesController extends Controller
{
    public function catIncomePage(){
        $categories = ExpenseCategories::orderBy( 'id', 'DESC' )->get();

        return view( 'layouts.incomeCategory', compact( 'categories' ) );
    }

    

    public function addCategory( Request $request ) {
        ExpenseCategories::create( [
            'name' => $request->name,
        ] );


        return redirect()->back()->with('message', 'Category Added Successfull');
    }
    public function deleteCategory( Request $request ) {

       $data = ExpenseCategories::where('id','=',$request->id)->first();
        $data->delete();


        return redirect()->back()->with('message', 'Category Added Successfull');
    }
}
