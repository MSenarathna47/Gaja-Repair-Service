<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function Login()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='0')
        {
            return view('frontend.index');
        }
        if($usertype=='1')
        {

            // return "admin";

            return view('backend.index');

        }
        else
        {
            return view('');
        }
    }
}
