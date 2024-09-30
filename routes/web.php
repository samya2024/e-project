<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
});




Route::get('/home', function () {
    return view('home');
});

Route::get('/horror', function () {
    return view('horror');
});

Route::get('/fantacy', function () {
    return view('fantacy');
});

Route::get('/dummy', function () {
    return view('dummy');
});

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/documentary', function () {
    return view('documentary');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/comedy', function () {
    return view('comedy');
});

Route::get('/anime', function () {
    return view('anime');
});

Route::get('/action', function () {
    return view('action');
});
Route::get('/romance', function () {
    return view('romance');
});

Route::get('/suspence', function () {
    return view('suspence');
});

Route::get('/documantary', function () {
    return view('documantary');
});


Route::get('/popular', function () {
    return view('popular');
});
Route::get('/premium', function () {
    return view('premium');
});

Route::get('/kids', function () {
    return view('kids');
});


Route::get('/register', function () {
    return view('register');
});
Route::get('/index', function () {
    return view('index');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==0){
            return view('home');
        }
    })->name('dashboard');
});
