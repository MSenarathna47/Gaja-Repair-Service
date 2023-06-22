@extends('backend.main_master')
@section('index')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        {{-- <th>Phone Number</th> --}}
                        {{-- <th>Email</th> --}}
                        <th>Address</th>
                        <th>Car Model</th>
                        <th>Car Year</th>
                        {{-- <th>License Plate</th> --}}
                        {{-- <th>Transmission Type</th>   --}}
                        {{-- <th>Fuel Fype</th> --}}
                        <th>Service Selection</th>
                        <th>Preferred Date Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($appointments as $appointment)
                        <tr>
                          <td>{{ $appointment->fullName}}</td>
                          {{-- <td>{{ $appointment->phoneNumber}}</td> --}}
                          {{-- <td>{{ $appointment->email}}</td> --}}
                          <td>{{ $appointment->address}}</td>
                          <td>{{ $appointment->carModel}}</td>
                          <td>{{ $appointment->carYear}}</td>
                          {{-- <td>{{ $appointment->licensePlate}}</td> --}}
                          {{-- <td>{{ $appointment->transmissiontype}}</td> --}}
                          {{-- <td>{{ $appointment->fuelfype}}</td> --}}
                          <td>{{ $appointment->serviceSelection}}</td>
                          <td>{{ $appointment->preferredDateTime}}</td>
                          {{-- <td>{{ $appointment->}}</td> --}}
                          <td>
                            <a href="{{ route('check.appointment',$appointment->id) }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" ></i></a>
                            <a href="{{ route('appointment.delete',$appointment->id)}}" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>

                          </td>




                        </tr>
                      @endforeach
                    </tr>
                </tbody>
            
            </table>
        </div>

    </div>
</div>
@endsection
