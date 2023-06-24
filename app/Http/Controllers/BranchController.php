<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Branch;
use App\Models\Branchappointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    public function ViewBranch()
    {
        $branch = Branch::all();
        return view('backend.admin.branch.branch_view', compact('branch'));
    }

    public function AddBranch()
    {
        return view('backend.admin.branch.branch_add');
    }

    public function StoreBranch(Request $request)
    {

        $branch = new Branch();   
        $branch->branch_name = $request->bname;
        $branch->branch_no = $request->bno;
        $branch->telephone = $request->telephone;
        $branch->city = $request->city;
        $branch->save();

        return redirect()->route('view.branch');
    }

    public function DeleteBranch($id)
    { 
    
        Branch::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function EditBranch($id)
    {
      $branch = Branch::findOrFail($id);
      return view('backend.admin.branch.branch_edit',compact('branch'));

    }

    public function UpdateBranch(Request $request)
    {
        $branchid=$request->id;
        Branch::findOrFail($branchid)->update([

            'branch_name'=> $request->bname,
            'branch_no'=> $request->bno,
            'telephone' => $request->telephone,
            'city' => $request->city,

        ]);         
        return redirect()->route('view.branch');
   }



}



