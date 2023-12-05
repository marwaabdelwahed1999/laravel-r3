<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function form_submision(Request $request) {
        
        $email = $request->input('email');
        $password = $request->input('pwd');

        $message = "Your email is ".$email." and your password is ".$password ;
        return  $message;

         
    }
}
