<?php

use App\Models\Bowling;
use App\Models\Event;
use App\Models\Flyer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'events' => Event::where('is_on_homepage', true)->get(['title', 'images', 'slug']),
        'bowling' => Bowling::get(),
        'flyers' => Flyer::whereJsonContains('pages', 'home')->get(),

    ]);
})->name('home');

Route::get('reservations', function () {
    return view('reservations');
})->name('reservations');

Route::get('birthdays', function () {
    return view('birthdays', [
        'flyers' => Flyer::whereJsonContains('pages', 'birthdays')->get(),
    ]);
})->name('birthdays');

Route::get('specials', function () {
    return view('specials', [
        'events' => Event::where('is_visible', true)->with('faqs')->get(),
        'flyers' => Flyer::whereJsonContains('pages', 'specials')->get(),
    ]);
})->name('specials');

Route::get('food', function () {
    return view('food', [
        'flyers' => Flyer::whereJsonContains('pages', 'food')->get(),
    ]);
})->name('food');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('newsletter-joined', function () {
    dd('in the web file');
})->name('newsletter');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
