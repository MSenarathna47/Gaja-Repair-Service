@extends('backend.main_master')
@section('index')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Basic Datatable</h5>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Branch Name</th>
                        <th>Branch No</th>
                        <th>Telephone</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($branch as $branch)
                        <tr>
                          <td>{{ $branch->branch_name}}</td>
                          <td>{{ $branch->branch_no}}</td>
                          <td>{{ $branch->telephone}}</td>
                          <td>{{ $branch->city}}</td>
                     
                          <td>
                            <a href="{{ route('edit.branch',$branch->id) }}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit" ></i></a>
                            <a href="{{ route('delete.branch',$branch->id)}}" type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>

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
