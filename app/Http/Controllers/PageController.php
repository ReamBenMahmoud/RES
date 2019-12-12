<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(){
return  view('contact');

    }

    public function show2(){
        return  view('about');
        
            }
}
