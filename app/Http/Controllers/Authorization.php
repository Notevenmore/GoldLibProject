<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Authorization extends Controller
{
    public function register(){
        return view('register', [
            'title' => 'Register'
        ]);
    }
    public function login(){
        return view('login', [
            'title' => 'Login',
            'email_error' => false,
            'password_error' => false
        ]);
    }
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('login');
    }
    public function addUserData(Request $request){
        $validation = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:10|max:20'
        ]);

        $validation['statusadmin'] = false;
        $validation['image'] = 'photo-profil.jpg';
        User::create($validation);
        return redirect()->route('login');
    }
    public function checkauthorize(Request $request){
        $credensial = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:10|max:20'
        ]);
        if(Auth::attempt($credensial)){
            $request->session()->regenerate();
            return redirect()->route('home');           
        }else{
            return redirect()->route('login');
        }
    }
}
