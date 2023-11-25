<?php

namespace App\Http\Controllers;

class  ForgotPassword extends Controller
{
    public function ScreenForgotpassword (){
      return view ('Screen-ForgotPassword');
    }

    public function forgot (){
        
    }
}