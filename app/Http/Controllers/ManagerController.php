<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\BranchManager;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function View()
    {
        $managers = User::where('usertype', 2)->get();
        return view('backend.manager.view_managers', compact('managers'));
    }

    public function AddManager()
    {
        $branch = Branch::all();
        return view('backend.manager.add_manager',compact('branch'));
        // $managers = BranchManager::all();
        // return view('backend.branch.view_manager', compact('managers'));
    }
    public function Store(Request $request)
    {

        // dd($request);
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);


        $Branchmanager = new User();   

        $Branchmanager->usertype = 2;
        $Branchmanager->branch_id=$request->branch_id;
        $Branchmanager->name = $request->name;
        $Branchmanager->phoneNumber = $request->phonenumber;
        $Branchmanager->address = $request->address;
        $Branchmanager->email = $request->email;
        $Branchmanager->password = Hash::make($request->password);
        $Branchmanager->save();

        return redirect()->route('view.manager');

        
 
    }


    public function DeleteManager($id)
        {
            User::findOrFail($id)->delete();
            return redirect()->back();
        }


        public function EditManager($id)
        {
          $branchmanager =   User::findOrFail($id);
          return view('backend.manager.edit_manager',compact('branchmanager'));

        }

        

    public function UpdateManager(Request $request)
    {
        // dd($request);
        $branchid=$request->id;
        User::findOrFail($branchid)->update([

            'name'=> $request->name,
            'phonenumber'=> $request->phonenumber,
            'address' => $request->address,
            'email' =>$request->email,
            'password' => Hash::make($request->password),


        ]);         
        return redirect()->route('view.manager');

        

    }
   
       
}
