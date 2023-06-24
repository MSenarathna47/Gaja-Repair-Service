@extends('backend.admin.main_master')
@section('index')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Request Appointment</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>Car Model</th>
                        <th>Car Year</th>                     
                        <th>Service Selection</th>
                        <th>Preferred Date Time</th>
                        <th>Status</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($requestedappointment as $requestedappointment)
                        <tr>
                          <td>{{ $requestedappointment->fullName}}</td>
                          <td>{{ $requestedappointment->address}}</td>
                          <td>{{ $requestedappointment->carModel}}</td>
                          <td>{{ $requestedappointment->carYear}}</td>
                          <td>{{ $requestedappointment->serviceSelection}}</td>
                          <td>{{ $requestedappointment->preferredDateTime}}</td>
                          <td class="font-size-20">
                            <span class="badge bg-warning"> {{ $requestedappointment->status}} </span>
                          </td> 
                          {{-- <td>
                            <a href="{{ route('admin.check.appointment',$requestedappointment->id) }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" ></i></a>
                            <a href="{{ route('admin.delete.appointment',$requestedappointment->id)}}" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                          </td> --}}




                        </tr>
                      @endforeach
                    </tr>
                </tbody>
            
            </table>
        </div>

    </div>
</div>
@endsection
