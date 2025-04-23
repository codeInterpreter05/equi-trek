<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormCompany extends Model
{
    use HasFactory;

    protected $table = 'formcompany';

    protected $fillable = [
        'name',
        'about',
        'market_cap',
        'current_price',
        'high_low',
        'stock_pe',
        'book_value',
        'dividend_yield',
        'roce',
        'roe',
        'face_value',  // Added field
        'url',          // Added field
    ];
}
