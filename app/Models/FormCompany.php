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
        'symbol',
        'sector',
        'industry',
        'market_cap',
    ];
}
