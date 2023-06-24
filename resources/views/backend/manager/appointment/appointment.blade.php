@extends('backend.manager.main_master')
@section('index')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($data as $data)
                        <tr>
                          <td>{{ $data->fullName}}</td>
                         
                          <td>{{ $data->address}}</td>
                          <td>{{ $data->carModel}}</td>
                          <td>{{ $data->carYear}}</td>                
                          <td>{{ $data->serviceSelection}}</td>
                          <td>{{ $data->preferredDateTime}}</td>
                          <td>
                            <a href="{{ route('manager.check.appointment',$appointment->id) }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye" ></i></a>
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
