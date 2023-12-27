<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/scrap', [App\Http\Controllers\ScraperController::class, 'scrap'])->name('scrap');
Route::get('/database', [DatabaseController::class, 'show'])->name('database.show');
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// Sposób zapisu
Route::get('/hello', function () {
    return response("hello world");
});

// Wildcard
// parsing some value 
Route::get('posts/{id}', function ($id) {
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/listings', [ListingController::class, 'index']);

Route::get('/listings/create', [ListingController::class, 'create']);

Route::get('/listings/{id}', function ($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});
