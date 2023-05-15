<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function homePage(){
        return '<h1>This is the Home page</h1><p><a href="/about">Go to about page</a></p>';
    }
    public function aboutPage(){
        return '<h1>This is the About page</h1><p><a href="/">Go to home page</a></p>';
    }
}
