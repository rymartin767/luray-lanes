<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_visible' => 'boolean',
        'is_on_homepage' => 'boolean',
        'images' => 'array'
    ];

    protected static function booted(): void
    {
        static::creating(function (Event $event) {
            $event->slug = Str::of($event->title)->slug();
        });

        static::deleting(function (Event $event) {
            Storage::disk('local')->delete($event->images);
        });
    }

    public function faqs() : Relation
    {
        return $this->hasMany(Faq::class, 'event_id', 'id');
    }
}
