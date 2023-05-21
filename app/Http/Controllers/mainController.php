<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function homePage(Request $request){
        $name = 'Qadeer Khan';
        if(auth()->check()){
            return view('home-feed');
        }else{
            return view('homepage',['name'=>$name]);
        }
    }
    public function aboutPage(){
        return view('single-post');
    }
}
