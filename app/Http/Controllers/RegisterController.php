<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first name' => 'required|max:128',
            'last name' => 'required|max:128',
            'username' => 'required|unique:users|max:128',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:16',
        ]);

        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/');
    }
}
