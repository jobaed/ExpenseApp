<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncomeCategories extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function incomes()
    {
        // return $this->hasMany(Income::class, 'income_category_id');
        return $this->hasMany(Income::class, 'income_category_id');
    }
}
