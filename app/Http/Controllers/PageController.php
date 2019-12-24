<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showContact(){
        return  view('contact');
    }

    public function showAbout(){
        return  view('about');
        
    }

    public function showHome(){
        return view('home1');
    }

    public function showReservation(){

        return view('reservation');
    }

    public  function showCheckout(){
        return view('checkout');

    }

    public function loginAdmin(){

        return view('admin.loginAdmin');

        // return redirect()->route('home1');
    }

    public function login(){

         request()->validate([

                 "email"=>'required|email',
                 "password"=>'required'

]);

          $creds = request()->only('email','password');
          if (auth('web_admin')->attempt($creds)){
              return redirect()->intended();
          } 
          return redirect()->back();
    }
    
         
}
