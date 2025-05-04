<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    //
    public function welcome(){
        return "welcome page";
    }
    public function index(){
        return view("welcome ");
    }
}
