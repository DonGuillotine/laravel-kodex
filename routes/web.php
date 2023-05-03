<?php

use Illuminate\Http\Request;
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
    return view('job', [
        'heading' => 'Latest Jobs',
        'jobs' => [
            'id' => 1,
            'title' => 'Senior Python Developer',
            'description' => 'XBorg is revolutionizing the gaming industry by empowering gamers to create their gaming digital identity through a credential network that paves the way for a new generation of enhanced gaming applications, such as more efficient matchmaking, reputation-based lending and fan engagement apps. With the potential to onboard tens of millions of players into the Web3 ecosystem, XBorg is set to transform the future of gaming as we know it with its gaming protocol. XBorg is also home to the most competitive Web3 gaming community that actively helps us shape the best products. '
        ],
        [
            'id' => 2,
            'title' => 'Junior Laravel Developer',
            'description' => 'XBorg is revolutionizing the gaming industry by empowering gamers to create their gaming digital identity through a credential network that paves the way for a new generation of enhanced gaming applications, such as more efficient matchmaking, reputation-based lending and fan engagement apps. With the potential to onboard tens of millions of players into the Web3 ecosystem, XBorg is set to transform the future of gaming as we know it with its gaming protocol. XBorg is also home to the most competitive Web3 gaming community that actively helps us shape the best products. '
        ],
        [
            'id' => 3,
            'title' => 'Senior Typescript Developer',
            'description' => 'XBorg is revolutionizing the gaming industry by empowering gamers to create their gaming digital identity through a credential network that paves the way for a new generation of enhanced gaming applications, such as more efficient matchmaking, reputation-based lending and fan engagement apps. With the potential to onboard tens of millions of players into the Web3 ecosystem, XBorg is set to transform the future of gaming as we know it with its gaming protocol. XBorg is also home to the most competitive Web3 gaming community that actively helps us shape the best products. '
        ]
    ]); 
});

// Routing: to return a response
Route::get('/hello', function(){
    return response('<h1>Hello World</h1>', 404)->header('Content-Type', 'text/plain');
});


// Routing: Wildcard Expressions
Route::get('/posts/{id}', function($id){
    ddd($id);
    return response('Post number ' . $id);
})->where('id', '[0-9]'); 


// Routing: Testing Search Params
Route::get('/search', function(Request $request){
    return $request->name . ' ' . $request->age;
});