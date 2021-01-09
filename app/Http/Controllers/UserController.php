<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signin(){
    	return view('ban-banh.login');
    }

    public function signup(){
    	return view('ban-banh.signup');
    }
}
