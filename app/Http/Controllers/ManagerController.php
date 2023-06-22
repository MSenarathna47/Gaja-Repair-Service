<?php

namespace App\Http\Controllers;

use App\Models\BranchManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function View()
    {
        $managers = BranchManager::all();
        return view('backend.branch.view_managers', compact('managers'));
    }

    public function AddManager()
    {
        return view('backend.branch.add_manager');
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


        $Branchmanager = new BranchManager();   
        $Branchmanager->name = $request->name;
        $Branchmanager->phoneNumber = $request->phonenumber;
        $Branchmanager->address = $request->address;
        $Branchmanager->email = $request->email;
        $Branchmanager->password = Hash::make($request->password);
        // $Branchmanager->branch_id = $request->branch_id;
        $Branchmanager->save();

        return redirect()->route('view.manager');

        
 
    }


    public function DeleteManager($id)
        {
            BranchManager::findOrFail($id)->delete();
            return redirect()->back();
        }


        public function EditManager($id)
        {
          $branchmanager =   BranchManager::findOrFail($id);
          return view('backend.branch.edit_manager',compact('branchmanager'));

        }

        
    public function UpdateManager(Request $request)
    {

        // dd($request);
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);


        $Branchmanager = new BranchManager();   
        $Branchmanager->name = $request->name;
        $Branchmanager->phoneNumber = $request->phonenumber;
        $Branchmanager->address = $request->address;
        $Branchmanager->email = $request->email;
        $Branchmanager->password = Hash::make($request->password);
        // $Branchmanager->branch_id = $request->branch_id;
        $Branchmanager->save();

        return redirect()->route('view.manager');

        
 
    }
       
}
