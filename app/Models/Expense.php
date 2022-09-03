<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'name',
        'catagory_id',
        'amount',
        'description',
        'expense_date'
    ];
}
