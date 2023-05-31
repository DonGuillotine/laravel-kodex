<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

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


// Display All Jobs
Route::get('/', [JobController::class, 'index']);


// Create new Job View
Route::get('/single_job/create', [JobController::class, 'create']);


// Store A Job
Route::post('/jobberman', [JobController::class, 'store']);


// Display A Single Job
// Introduction to Route Model Binding
Route::get('/single_job/{one_job}', [JobController::class, 'show']);


// Routing: to return a response
Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 404)->header('Content-Type', 'text/plain');
});


// Routing: Wildcard Expressions
Route::get('/posts/{id}', function($id){
    // Dump die debug-> mainly for debugging
    ddd($id); 
    return response('Post number ' . $id);
})->where('id', '[0-9]'); 


// Routing: Testing Search Params
Route::get('/search', function(Request $request){
    // Whatever that was passed on the url
    return $request->name . ' ' . $request->email;
});
