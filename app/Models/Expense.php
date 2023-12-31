<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model {
    use HasFactory;

    protected $fillable = ['expense_category_id', 'title', 'description', 'amount', 'expense_date'];

    public function ExpenseCategory() {
        return $this->belongsTo( ExpenseCategories::class );
    }
}
