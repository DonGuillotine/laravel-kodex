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

Route::get('/', function () {
    return view('welcome');
});

// Routing: to return a response
Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 404)->header('Content-Type', 'text/plain');
});


// Routing: Wildcard Expressions
Route::get('/posts/{id}', function($id){
    return response('Post number ' . $id)->where('id', '[0-9]');
}); 