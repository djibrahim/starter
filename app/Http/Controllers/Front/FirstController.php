<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function __construct()
    {
    // $this -> middleware('auth')->except('show2');
    }

    public function show0(){
        return 'show ibra 0';
    }
    public function show1(){
        return 'show ibra 1';
    }
    public function show2(){
        return 'show ibra 2';
    }
}
