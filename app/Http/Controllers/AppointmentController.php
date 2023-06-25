<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailAuto;
use App\Models\Appointment;
use App\Models\Branch;
use App\Models\Branchappointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use LDAP\Result;

class AppointmentController extends Controller
{
    public function MakeAppointment(Request $request)
    {
        // dd($request);
        // $item->date= date('Y-m-d H:i:s', strtotime($request->date));

        if (Auth::user()) {
        // Validate the form data
        
        $validatedData = $request->validate([
            'fullName' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        
        $appointment = new Appointment();
        
        $appointment->time = $request->time;
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
                'time' => $request->time,
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
        return view('backend.admin.appointment.appointment', compact('appointments'));
    }

    public function CheckAppointment($id)
    {
        $branch = Branch::all();
        $appointment= Appointment::findorFail($id); //get specific id gata using findorfail function
        return view('backend.admin.appointment.appointment_check' , compact('appointment','branch'));
    }

    public function AppointmentDelete($id)
    {
        Appointment::findOrFail($id)->delete();
        return redirect()->back();
    }
    public function RequestAppointment(Request $request)
    {
        $bid = $request->branch_id;

        $user = User::where('branch_id',$bid)->orderBy('id','DESC')->get();
        foreach ($user as $user) {
            $manager_id = $user->id;
            // Use the $id as needed
        }

        $appointment = new Branchappointment();
        $appointment->fullName = $request->fullName;
        $appointment->phoneNumber = $request->phoneNumber;
        $appointment->branch_id=$request->branch_id;
        $appointment->email = $request->email;
        $appointment->manager_id =$manager_id;
        $appointment->status = "Pending";
        $appointment->address = $request->address;
        $appointment->time = $request->time;

        $appointment->carModel = $request->carModel;
        $appointment->carYear = $request->carYear;
        $appointment->licensePlate = $request->licensePlate;
        $appointment->transmissiontype = $request->transmissiontype;
        $appointment->fuelfype = $request->fuelfype;
        $appointment->serviceSelection = $request->serviceSelection;
        $appointment->preferredDateTime = $request->preferredDateTime;
        $appointment->save();
    
        // Appointment::truncate();

        return redirect()->route('admin.view.appointment');
 
    }
    public function ViewRequestAppointment()
    {
        $requestedappointment = Branchappointment::where('status','Pending')->orderBy('id','DESC')->get();
        return view('backend.admin.appointment.requested_appointment', compact('requestedappointment'));
    }





    public function ManagerViewAppointment()
    {

            $data  = Branchappointment::where('manager_id', Auth::user()->id)->where('status','Pending')->orderBy('id','DESC')->get();
            return view('backend.manager.appointment.appointment',compact( 'data'));
    }

    public function ManagerCheckAppointment($id)
    {
        $appointment= Branchappointment::findorFail($id); //get specific id gata using findorfail function
        return view('backend.manager.appointment.appointmentview' , compact('appointment'));
    }
    
    public function CorformAppointment(Request $request)
    {
        $id = $request->id;
        Branchappointment::findOrFail($id)->update([

            'status'=> 'approved',
            
        ]);         

        return redirect()->route('manager.view.appointment');


    }

    public function ViewApprovedAppointment()
    {
        $approvedappointment = Branchappointment::where('status','approved')->orderBy('id','DESC')->get();
        return view('backend.admin.appointment.approved_appointment', compact('approvedappointment'));
    }


    public function ViewMailedAppointment()
    {
        $mailedappointment = Branchappointment::where('status','Mail Send')->orderBy('id','DESC')->get();
        return view('backend.admin.appointment.mailed_appointment', compact('mailedappointment'));
    }

    public function SendMail(Request $request)
    {
        $id = $request->id;
        // $invoice = Order::findOrFail($order_id);
        $appointment = Branchappointment::findOrFail($id);
        // dd($appointment);

        $data = [
            'fullName' => $appointment->fullName,
            'preferredDateTime' => $appointment->preferredDateTime,
            'time' => $appointment->time,
            // 'phoneNumber' => $appointment->phoneNumber,
            // 'email' => $appointment->email,
            // 'phoneNumber' => $appointment->phoneNumber,
            // 'phoneNumber' => $appointment->phoneNumber,
        ];

        Branchappointment::findOrFail($id)->update([

            'status'=> 'Mail Send',
            
        ]);     

        Mail::to($appointment->email)->send(new SendMail($data));
        return redirect()->route('admin.view.appointment');    
    }
















 


    
}
