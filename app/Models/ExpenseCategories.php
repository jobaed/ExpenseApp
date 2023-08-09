<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategories extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function expenses()
    {
        // return $this->hasMany(Income::class, 'income_category_id');
        return $this->hasMany(Expense::class, 'expense_category_id');
    }
}
