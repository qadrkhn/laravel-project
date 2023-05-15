<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function homePage(){
        $name = 'Qadeer Khan';
        $stack = ['Django','Django Rest Framework','Laravel'];
        return view('homepage',['stack' => $stack , 'name' => $name]);
    }
    public function aboutPage(){
        return view('single-post');
    }
}
