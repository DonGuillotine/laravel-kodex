<?php

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;

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
Route::get('/single_job/create', [JobController::class, 'create'])->middleware('auth');


// Store A Job
Route::post('/submit_job', [JobController::class, 'store'])->middleware('auth');


// Edit A Job
Route::get('/single_job/{one_job}/edit', [JobController::class, 'edit'])->middleware('auth');


// Edit functionality
Route::put('/single_job/{one_job}', [JobController::class, 'update'])->middleware('auth');

// Delete functionality
Route::delete('/single_job/{one_job}', [JobController::class, 'delete'])->middleware('auth');


// Show registeration from
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


// Store a User
Route::post('/users', [UserController::class, 'store']);


// Logout User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');


// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');


// Log in User
Route::post('/users/login_user', [UserController::class, 'login_user']);


// Show manage page
Route::get('single_job/manage', [JobController::class, 'manage'])->middleware('auth');


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
