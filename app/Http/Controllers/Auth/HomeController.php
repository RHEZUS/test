<?php

namespace App\Http\Controllers\Auth;

class HomeController extends Controller
{

    public function test($name){
        return 'bonjour ' . $name;
    }
}