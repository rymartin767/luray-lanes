<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Faq extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function event() : Relation
    // {
    //     return $this->belongsTo(Event::class, 'event_id', 'id');
    // }
}
