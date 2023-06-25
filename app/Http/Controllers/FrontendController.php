<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Review;
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
    
        $branch = Branch::get();
        return view('frontend.branch',compact('branch'));
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
    public function Review(){
        
        $review = Review::limit(3)->get();

        // $name = User::
        // dd($review);
        return view('frontend.review',compact('review'));
    }

}
