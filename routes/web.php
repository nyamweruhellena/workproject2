<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('index');
});

Route::get('/membership', function() {
    return view('membership-form');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/posts', [PostController::class, 'getPosts'])->name('posts');
Route::get('/posts/{id}', [PostController::class, 'getPost'])->name('post');
    

Route::get('/search', function(Request $request) {
    return response()->json([
        'employees' => $request->q
     ]);
});

Route::post('/add_member',[UserController::class, 'create'])->name('add');
Route::get('/user/{id}',[UserController::class, 'find'])->name('find');


