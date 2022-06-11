<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    function login(){
        return view('login');
    }

    function register(){
        return view('register');
    }

    function dashboard(){
        return view('dashboard');
    }
    
    function user(){
        return view('user');
    }

    function welcome(){
        return view('welcome');
    }
}
