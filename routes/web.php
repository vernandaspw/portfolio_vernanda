<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingController::class, 'index']);

// Route::get('/', function () {
//     return view('pages.landing.index');
// });

Route::view('/', 'pages.landing.semua');
Route::view('/design', 'pages.landing.design');
Route::view('/web', 'pages.landing.web');
Route::view('/app', 'pages.landing.app');
Route::view('/link', 'pages.linker.index');