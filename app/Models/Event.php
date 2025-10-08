<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'is_visible' => 'boolean',
        'is_on_homepage' => 'boolean',
        'images' => 'array',
    ];

    protected static function booted(): void
    {
        static::creating(function (Event $event) {
            $event->slug = Str::of($event->title)->slug();
        });

        static::deleting(function (Event $event) {
            Storage::disk('s3')->delete($event->images);
        });
    }

    public function awsUrl(): string
    {
        return Storage::disk('s3')->url($this->images[0]);
    }

    public function faqs(): Relation
    {
        return $this->hasMany(Faq::class, 'event_id', 'id');
    }
}
