<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index() {
        $users = User::all();
        return view('contact-us',compact('users'));
    }
    
    public function store(Request $request) {
        // dd($request);
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;
        // validation
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        // store in db
        User::create([
          //limktob f lfo9 dyal table
            'name' =>$name,
            'email' =>$email,
            'message' =>$message,
        ]);
        return redirect('/contact-us');
    }
}
