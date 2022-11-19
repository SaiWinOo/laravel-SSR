<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function login(){
        return view('auth.login');
    }
    public function postRegister(){
        request()->validate([
            'name'=> 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8|confirmed',
            'profile_image' => 'required|mimes:jpg,jpeg,png,gif,svg,webp|max:5120',
        ]);
        $newName =  uniqid()."_profile_image_.".request()->file('profile_image')->extension();
        request()->file('profile_image')->storeAs("public",$newName);
        $user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
            'profile_image' => $newName,
        ]);
        if(!$user){
            return redirect()->route('auth.register');
        }
         return redirect()->route('auth.login');
    }

    public function postLogin(){
        $email = request()->email;
        $password = request()->password;
        if(!Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('auth.login')->with(['status' => 'Something is wrong!Please try again.']);
        }
        return redirect()->route('home')->with(['status' => 'You are logged in!']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route("auth.login");
    }
}
