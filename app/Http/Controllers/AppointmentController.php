<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailAuto;
use App\Models\Appointment;
use App\Models\Branch;
use App\Models\Branchappointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function StoreAppointment(Request $request)
    {

        if (Auth::user()) {


        // Validate the form data
        $validatedData = $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);


        $appointment = new Appointment();
        $appointment->fullName = $request->fullName;
        $appointment->phoneNumber = $request->phone;
        $appointment->email = $request->email;
        $appointment->address = $request->address;
        $appointment->carModel = $request->carmodel;
        $appointment->carYear = $request->caryear;
        $appointment->licensePlate = $request->licensePlate;
        $appointment->transmissiontype = $request->ttype;
        $appointment->fuelfype = $request->ftype;
        $appointment->serviceSelection = $request->serviceSelection;
        $appointment->preferredDateTime = $request->date;
        $appointment->save();


                // Start Send Email
            
                    $data = [
                        'fullName' => $request->fullName,
                    

                    ];

                    Mail::to($request->email)->send(new SendMailAuto($data));


                // Stop Send Email

        return redirect()->back()->with('success', 'Appointment created successfully!');

        } else {
            return redirect()->back()->with('success', 'You need to login first  !');

        }
 
    }

    public function ViewAppointment()
    {
    $appointments = Appointment::all();

    return view('backend.appointment', compact('appointments'));
    }

    public function AppointmentDelete($id)
        {
            Appointment::findOrFail($id)->delete();


            return redirect()->back();
        }

        public function CheckAppointment($id)
        {
            $branch = Branch::all();
            $appointment= Appointment::findorFail($id); //get specific id gata using findorfail function

            return view('backend.appointment.appointment_check' , compact('appointment','branch'));
        }

        public function SendMail(Request $request)
        {
            // dd($request);
            $id = $request->id;

                // Start Send Email
                    // $invoice = Order::findOrFail($order_id);
                    $appointment = Appointment::findOrFail($id);

                    $data = [
                        'fullName' => $appointment->fullName,
                        'preferredDateTime' => $appointment->preferredDateTime,
                        // 'phoneNumber' => $appointment->phoneNumber,
                        // 'email' => $appointment->email,
                        // 'phoneNumber' => $appointment->phoneNumber,
                        // 'phoneNumber' => $appointment->phoneNumber,


                    ];

                    Mail::to($appointment->email)->send(new SendMail($data));

                    return redirect()->route('view.appointment');


        }



















   public function ViewBranchAppointment()
   {


        $a=Auth::user()->id;
        $gg = DB::table('users')->where('id', $a)->value('branch_id');
        $ss = DB::table('branches')->where('id', $gg)->value('branch_no');


        // $aa= $request->branch_id;
        // // $gg = DB::table('users')->where('id', $a)->value('branch_id');
        // $ss = DB::table('branches')->where('id', $aa)->value('branch_no');

        // if($ss == "BRN01")
        // {
        //     $dd = 
        // }
        // if($ss == "BRN02")
        // {

        // }else{

        // }



        // dd($ss);

    
    return view('backend.managerr.appointment.appointment');
   }

   public function StoreBranchAppointment(Request $request)
   {
    $appointment = new Branchappointment();
    $appointment->fullName = $request->fullName;
    $appointment->phoneNumber = $request->phoneNumber;
    $appointment->branch_id=$request->branch_id;
    $appointment->email = $request->email;
    $appointment->status = "New";
    $appointment->address = $request->address;
    $appointment->carModel = $request->carModel;
    $appointment->carYear = $request->carYear;
    $appointment->licensePlate = $request->licensePlate;
    $appointment->transmissiontype = $request->transmissiontype;
    $appointment->fuelfype = $request->fuelfype;
    $appointment->serviceSelection = $request->serviceSelection;
    $appointment->preferredDateTime = $request->preferredDateTime;
    $appointment->save();

    Appointment::truncate();


        return redirect()->route('view.branchappointment');

   }


    
}
