<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index(){
        return view('index');
    }
}
