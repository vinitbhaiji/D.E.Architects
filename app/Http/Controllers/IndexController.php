<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index(){
        return view("index");
    }
    public function about(){
        return view("about");
    }
    public function architectural(){
        return view("architectural");
    }
    public function contact(){
        return view("contact");
    }
    public function interior(){
        return view("interior");
    }
    public function legal(){
        return view("legal");
    }
    public function management(){
        return view("management");
    }
    public function portfolio(){
        return view("portfolio");
    }
    public function realestate(){
        return view("realestate");
    }
    public function services(){
        return view("services");
    }
    public function turnkey(){
        return view("turnkey");
    }
    
public function loginuser(Request $admin){
        $credentials = $admin->only('email', 'passoword'); // Ensure that the key 'Passowrd' matches your form input name

    if (Auth::attempt($credentials)) {
        // Authentication successful
        return redirect('dashboard');
    } else {
        // Authentication failed
        return redirect('login')->with('error', 'Email/Password is incorrect');
    }
    }
}