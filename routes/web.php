<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PagesController;

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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Joni Kopral';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/', 'PagesController@home');
// Route::get('/about', 'PagesController@about');

// Route::get('/', [PagesController::class, 'home']);
// Route::get('/about', [PagesController::class, 'about']);

Route::get('/', 'App\Http\Controllers\PagesController@home');
Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

//Ini utk membuat route manual, ditulis satu2
//Student
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');
// Route::post('/students', 'App\Http\Controllers\StudentsController@store');
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');
// Route::patch('/students/{student}', 'App\Http\Controllers\StudentsController@update');

//Ini utk membuat route otomatis, jadi kita nggak perlu membuat manual
Route::resource('students', 'App\Http\Controllers\StudentsController');