<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect()->route('login');
});

// Route::get('home', function () {
//     return redirect()->route('login');
// })->name('home');

Route::get('/', function () {
    $pageTitle = 'Welcome';
    return view('welcome', compact('pageTitle'));
})->name('welcome');

// Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('default', [HomeController::class, 'index'])->Middleware('auth')->name('default');
Route::get('profile', ProfileController::class)->middleware('auth')->name('profile');
Route::resource('employees', EmployeeController::class)->middleware('auth');

// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// routes/web.php

// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');