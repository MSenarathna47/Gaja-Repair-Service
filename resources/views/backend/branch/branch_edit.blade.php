@extends('backend.main_master')
@section('index')
<div class="col-md-12" data-select2-id="15">
    <div class="card">
        <form class="form-horizontal" method="POST" action="{{ route('update.branch') }}">
            @csrf

            <input type="text" value="{{ $branch->id }}" name="id" hidden>
            <div class="card-body">
                <h4 class="card-title">Edit Branch</h4>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label">Branch Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="bname" value="{{ $branch->branch_name }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 text-right control-label col-form-label">Branch No</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="bno" value="{{ $branch->branch_no }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Telephone</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="telephone" value="{{ $branch->telephone}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 text-right control-label col-form-label" >City</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="city" value="{{ $branch->city}}" >
                    </div>
                </div>              
            </div>
            <div class="border-top">
                <div class="card-body">
                    <button class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
  

</div>
@endsection
