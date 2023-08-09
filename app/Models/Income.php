<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = ['income_category_id','title','amount','income_date'];


    public function IncomeCategory()
    {
        return $this->belongsTo(IncomeCategories::class);
    }

}
