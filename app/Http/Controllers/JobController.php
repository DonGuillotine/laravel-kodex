<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all Jobs
    public function index(){
        // dd(request()->tag);
        return view('jobberman.index', [
            'jobs' => Jobs::latest()->get()
        ]); 
    }

    // Show single job->Using Route Model Binding
    public function show(Jobs $one_job){
        return view('jobberman.show', [
            'single_job' => $one_job
        ]);
    }


    // Standard Naming Conventions
    // index - Displaying all Jobs
    // show - Display a single job
    // create - Create a new job
    // store - Store a Job
    // edit - Edit a Job
    // update - Update a Job
    // destroy - delete a job

    
}
