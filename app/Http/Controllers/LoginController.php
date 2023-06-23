<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function Login()
    {
        $usertype=Auth::user()->usertype;

      


        if($usertype=='0')
        {
            return view('frontend.index');
        }
         else if($usertype=='1')
        {
            return view('backend.index');
        }
        else if($usertype=='2')
        {
            return view('backend.managerr.index');
        }
        else{
            
        }
    }
}
