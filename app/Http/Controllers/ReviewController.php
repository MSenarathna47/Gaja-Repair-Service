<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function AddReview(Request $request)
    {


        if (Auth::user()) {

            $id=Auth::user()->id;
        
            $branch =  new Review();   
            $branch->user_id =$id;
            $branch->description = $request->description;
            $branch->satisfied = $request->satisfied;
            // $branch->city = $request->city;
            $branch->save();
    
            return redirect()->route('review');
        } else {
            return redirect()->route('login');

        }

    }
}
