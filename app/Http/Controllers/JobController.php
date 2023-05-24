<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all Jobs
    public function index(){
        return view('job', [
            'heading' => 'Latest Jobs',
            'jobs' => Jobs::all()
        ]); 
    }

    // Show single job
    public function show(Jobs $one_job){
        return view('single_job', [
            'single_job' => $one_job
        ]);
    }
}
