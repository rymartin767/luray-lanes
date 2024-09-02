<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flyer extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'pages' => 'array'
    ];

    protected static function booted(): void
    {
        static::deleting(function (Flyer $flyer) {
            Storage::disk('s3')->delete($flyer->image_url);
        });
    }
}
