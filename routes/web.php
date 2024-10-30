<?php

use App\Http\Controllers\EventsClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Rute pentru utilizatori cu rolul de admin
    Route::middleware(['checkRole:1'])->group(function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/', [EventController::class, '@index']);
        Route::resource('events', EventController::class);
        Route::get('/', [TicketController::class, '@index']);
        Route::resource('tickets', TicketController::class);
    });

    // Rute pentru utilizatori cu rolul de client
    Route::middleware(['checkRole:0'])->group(function () {
        Route::get('/', [EventsClientController::class, 'index']);
        Route::get('cart', [EventsClientController::class, 'cart']);
        Route::get('add-to-cart/{id}', [EventsClientController::class, 'addToCart']);
        Route::patch('update-cart', [EventsClientController::class, 'update']);
        Route::delete('remove-from-cart', [EventsClientController::class, 'remove']);
        Route::get('/cart', 'App\Http\Controllers\StripeController@index')->name('index');
        Route::post('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
        Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
        Route::get('/pagina-home/{id}', [HomeController::class, 'showCustomHomePage'])->name('pagina-home-personalizata');
        Route::get('/sponsori-parteneri/{id}', [HomeController::class, 'sponsoriParteneri'])->name('sponsori-parteneri');
        Route::get('/agenda/{id}', [HomeController::class, 'agenda'])->name('agenda');
        Route::get('/contact/{id}', [HomeController::class, 'contact'])->name('contact');
    });
});
