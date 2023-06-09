<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    // Show all Jobs
    public function index(){
        // dd(request()->tag);
        return view('jobberman.index', [
            'jobs' => Jobs::latest()->filter(request(['tag', 'search']))->paginate(15)
        ]); 
    }

    // Show single job->Using Route Model Binding
    public function show(Jobs $one_job){
        return view('jobberman.show', [
            'single_job' => $one_job
        ]);
    }

    // Show Create Job Page
    public function create(){
        return view('jobberman.create');
    }

    public function store(Request $request){
        // dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('jobs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Jobs::create($formFields);
        return redirect('/')->with('message', 'Submission Successful!');
    }

    public function edit(Jobs $one_job){
        return view('jobberman.edit', ['job' => $one_job]);
    }

    public function update(Request $request, Jobs $one_job){
        // dd($request->title);
        if($one_job->user_id != auth()->id()){
            abort(403, 'Unauthorized Access Denied');
        }
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $one_job->update($formFields);
        return back()->with('message', 'Job Updated Successfully!');
    }

    public function delete(Jobs $one_job){
        if($one_job->user_id != auth()->id()){
            abort(403, 'Unauthorized Access Denied');
        }
        $one_job->delete();
        return redirect('/')->with('message', 'Job Deleted Successfully!');
    }

    public function manage(){
        return view('jobberman.manage', ['jobs' => auth()->user()->jobs()->get()]);
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
