@extends('backend.admin.main_master')
@section('index')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">View Branch Managers</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Branch Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($managers as $manager)
                        <tr>
                          <td>{{ $manager->name}}</td>
                          <td>{{$manager['branch'] ['branch_name']}}</td>     
                          <td>{{ $manager->phoneNumber}}</td>
                          <td>{{ $manager->email}}</td>
                          <td>{{ $manager->address}}</td>
                     
                          <td>
                            <a href="{{ route('edit.manager',$manager->id) }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit" ></i></a>
                            <a href="{{ route('delete.manager',$manager->id)}}" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
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
