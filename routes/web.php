<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource("post", "App\Http\Controllers\PostController");

Route::get("/contact", "App\Http\Controllers\Contact")->name("contact");

Route::get("/about", "App\Http\Controllers\About")->name("about");
