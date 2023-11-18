<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function SignUp(Request $req){
        $formFields = $req->validate([
            'username' => ['required','min:3'],
            'email' => ['required','email'],
            'password' => ['required','min:6']
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/')->with('message','Welcome ' . auth()->user()->username );

    }


    public function SignOut(Request $req){
        auth()->logout();
        $req->session()->regenerateToken();
        return back();
    }


    // login the user

    public function SignIn(Request $req){
        $formFields = $req->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $req->session()->regenerateToken();
            return redirect('/')->with('success','Welcome back ' . auth()->user()->username);
        }else{
            return back()->with('success','Invalid Credentials, Try Again');
        }


    }

    public function addNewAdmin(Request $req){
        $formFields = $req->validate([
            "username" => ['required','min:3'],
            "email" => ['required'],
            "password" => ['required','min:6'],
            "role" => ['required'],
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        User::create($formFields);
        return back()->with('success','Admin Added Successfully!');


    }




}
