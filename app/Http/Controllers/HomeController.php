<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function ViewFrontend()
    {
        return view('frontend.index');
    }

    public function ViewAdminDashboard()
    {
        return view('backend.admin.index');
    }

    public function ViewManagerDashboard()
    {
        return view('backend.manager.index');
    }
    
}
