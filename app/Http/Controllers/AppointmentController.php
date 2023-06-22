<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Mail\SendMailAuto;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            $appointment= Appointment::findorFail($id); //get specific id gata using findorfail function

            return view('backend.appointment.appointment_check' , compact('appointment'));
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


    
}
