<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function Index(){
        
        return view('frontend.index');
    }

    public function ViewAbout(){
        
        return view('frontend.about');
    }
    public function ViewBranch(){
        
        return view('frontend.branch');
    } 
    public function ViewContact(){
        
        return view('frontend.contact');
    }

    public function Viewfeatures(){
        
        return view('frontend.features');
    }
    public function Viewapoiment(){
        
        return view('frontend.apoiment');
    }
    public function Viewour_team(){
        
        return view('frontend.our_team');
    }


}
