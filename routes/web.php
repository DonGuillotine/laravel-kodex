<?php

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
Route::get('/', function () {
    return view('job', [
        'heading' => 'Latest Jobs',
        'jobs' => Jobs::all()
    ]); 
});

// Display A Single Job
Route::get('/single_job/{jobberman}', function(Jobs $jobberman){
    return view('single_job', [
        'single_job' => $jobberman
    ]);
});


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
