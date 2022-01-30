@extends('layouts.app')
@section('title','Lab Dashboard')
@section('content')
<center>
<div class="col-md-10 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Employee</h4>
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
        </div>
        <div class="card-body">
            <form action="/lab/addEmploye" method="POST" class="form form-horizontal">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label>Name</label>
                        </div>
                        <div class="col-md-9 form-group ">
                            <div class="position-relative has-icon-left">
                                <input type="text" id="fname-icon" class="form-control" name="name" placeholder="Name">
                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                <div class="form-control-position">
                                    <i class="bx bx-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Email</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <div class="position-relative has-icon-left">
                                <input type="email" id="email-icon" class="form-control" name="email" placeholder="Email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                <div class="form-control-position">
                                    <i class="bx bx-mail-send"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label>Password</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <div class="position-relative has-icon-left">
                                <input type="password" id="pass-icon" class="form-control" name="password" placeholder="Password">
                                <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                <div class="form-control-position">
                                    <i class="bx bx-lock"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Confirm Password</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <div class="position-relative has-icon-left">
                                <input type="password" id="pass-icon" class="form-control" name="cpassword" placeholder="Confirm Password">
                                <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                                <div class="form-control-position">
                                    <i class="bx bx-lock"></i>
                                </div>
                            </div>
                            <input type="text" name="lab_id" value="{{Auth::guard('web')->user()->id}}" hidden>
                            <input type="text" name="role" value="employee" hidden>
                        </div>
                        <div class="col-12 d-flex justify-content-end ">
                            <button type="submit" class="btn btn-primary mr-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary">Reset</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</center>
@endsection