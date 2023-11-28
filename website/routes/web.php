<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroller;
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
// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/about/{name}/{id}', function (string $name, $id) {
//     //return view('about');
//     echo"$name, $id";
// });
// Route::get('/about/{name}/{id}', function (string $name, int $id){
//     return view('about') ->with(compact('name', 'id'));
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/welcome', [customcontroller::class, 'home']);
Route::get('/about', [customcontroller::class, 'about']);
Route::get('/contact', [customcontroller::class, 'contact']);
