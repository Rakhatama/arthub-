<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:20',
        ]);

        
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        $request = session();
        $request->flash('success', 'Registration successfull! Please login');
        return redirect('/login');
    }
}
