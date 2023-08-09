<?php

namespace App\Http\Controllers;

use App\Models\IncomeCategories;
use Illuminate\Http\Request;

class IncomeCategoriesController extends Controller {
    public function catIncomePage() {

        $categories = IncomeCategories::orderBy( 'id', 'DESC' )->get();

        return view( 'layouts.incomeCategory', compact( 'categories' ) );
    }

    public function addCategory( Request $request ) {
        IncomeCategories::create( [
            'name' => $request->name,
        ] );


        return redirect()->back()->with('message', 'Category Added Successfull');
    }
    public function deleteCategory( Request $request ) {

       $data = IncomeCategories::where('id','=',$request->id)->first();
        $data->delete();


        return redirect()->back()->with('message', 'Category Added Successfull');
    }
}
