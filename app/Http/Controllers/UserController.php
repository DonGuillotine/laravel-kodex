<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    // Show Registeration Form
    public function create(){
        return view('users.register');
    }

    // Store Registered Users
    public function store(Request $request){
        // 1. Validate the form fields
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // 2. Encrypt the password
        $formFields['password'] = bcrypt($formFields['password']);

        // 3. Create the user
        $user = User::create($formFields);

        // 4. Log the user in
        auth()->login($user);

        // 5. Redirect user to home page
        return redirect('/')->with('message', 'User Created Successfully!');
    }

    // Logout user, invalidate the session and regenrateToken
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
}

    // Show Login Form
    public function login(){
        return view('users.login');
    }


    // Log in user    
    public function login_user(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Logged in Successfully!');
        }
        
        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}