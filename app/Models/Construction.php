<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'years_of_start',
        'years_of_finish',
        'price',
        'number_of_workers',
        'image',
    ];
}
