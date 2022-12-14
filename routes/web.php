<?php

use App\Http\Controllers\SongController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return 'Hello, world';
});

Route::get('/movies/{id}', function ($id) {
    return 'My id :' . ' '. $id;
});

Route::get('/songs', [SongController::class, 'index']);

Route::get('/new-song', [SongController::class, 'create'])->middleware('islogin');
Route::post('/new-song', [SongController::class, 'insert']);

Route::get('/song-detail/{id}', [SongController::class, 'show']);

Route::get('/test', function() {
    session(['email' => 'kusumaraju777@gmail.com']);
});