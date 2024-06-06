<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bowling extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'prices' => 'array',
        'hours' => 'array'
    ];
}
