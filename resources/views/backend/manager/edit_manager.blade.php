@extends('backend.main_master')
@section('index')
<div class="col-md-12" data-select2-id="15">
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('update.managers') }}">
            @csrf
            <input type="text" value="{{ $branchmanager->id }}" name="id" hidden>
            <div class="card-body">
                <h4 class="card-title">Add Branch Managers</h4>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label"> Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" value="{{ $branchmanager->name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-right control-label col-form-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="phonenumber" value="{{ $branchmanager->phoneNumber}} ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Address </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" value="{{ $branchmanager->address}} ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" value="{{ $branchmanager->email}} ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" value="{{ $branchmanager->password}} ">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Choose Branch</label>
                    <div class="col-sm-9">
                        <select name="branch_id" class="select2 form-control custom-select select2-hidden-accessible" style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="3">Select</option>
                        </select>
                   </div>
                </div>
              
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button class="btn btn-primary">Add</button>
                </div>
            </div>
        </form>
    </div>
  

</div>
@endsection
