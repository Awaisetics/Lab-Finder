@extends('layouts.app')
@section('title','Employee Dashboard')
@section('content')
<!-- <center>
<div class="col-md-10 col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Add Patient</h4>
        </div>
        <div class="card-body">
            <form action="/lab/addPatient" method="POST" class="form form-horizontal">
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
                            <input type="text" name="role" value="patient" hidden>
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
</center> -->

<div class="content-body">
    @if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    <!-- Basic Tables start -->
    <div class="row mt-3" id="basic-table">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Patients </h3>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" id="modalBtn">
                        Add Patient
                    </button>
                </div>
                @if(count($users)>0)
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>Due Date</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach($users as $user)
                                <tr>
                                    <td class="text-bold-500">{{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    <td class="text-bold-500"> {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }} </td>
                                    <td>
                                        <div class="row">
                                            <span id="btn" value="{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-show font-medium-1"></i></span>
                                            <a style="float: right; margin: 7px 0 0 7px;" href="/admin/lab/delete/{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <h4 class="pl-2">No Record</h4>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Add Patient </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div class="row invoice-info">
                        <div class="col-sm-6 col-12 mt-1">
                            <div class="mb-1">
                                <span style="font-size: 18px;">Name :</span>
                                <p class="name"> </p>
                            </div>
                            <div class="mb-1">
                                <span style="font-size: 18px;">Location :</span>
                                <p id="location"> </p>
                            </div>
                            <div class="mb-1">
                                <span style="font-size: 18px;">Date :</span>
                                <p id="created_at"> </p>
                            </div>
                            <div class="mb-1">
                                <span style="font-size: 18px;">Role :</span>
                                <p id="role"> </p>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                            <div class="card-body">
                                <form action="/lab/addPatient" method="POST" class="form form-horizontal">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-3 pl-0 pl-0">
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
                                            <div class="col-md-3 pl-0">
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

                                            <div class="col-md-3 pl-0">
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
                                            <div class="col-md-3 pl-0">
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
                                                <input type="text" name="lab_id" value="{{Auth::guard('web')->user()->lab_id}}" hidden>
                                                <input type="text" name="emp_id" value="{{Auth::guard('web')->user()->id}}" hidden>
                                                <input type="text" name="role" value="patient" hidden>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                    <button type="reset" class="btn btn-light-secondary">Reset</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal -->


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#modalBtn').on('click', function() {
                $('#exampleModal').modal({
                    show: true
                });
            })
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#btn', function() {
                let id = $(this).attr('value');
                $.ajax({
                    type: 'get',
                    url: "/admin/getUser/" + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    success: function(data) {
                        $('#exampleModal').modal('show');
                        if (data.user.name == "" || data.user.name == null) {
                            $('.name').text("Name Not Found");
                        } else {
                            $('.name').text(data.user.name);
                        }
                        if (data.user.location == "" || data.user.location == null) {
                            $('#location').text("Location Not Found");
                        } else {
                            $('#location').text(data.user.location);
                        }
                        if (data.user.created_at == "" || data.user.created_at == null) {
                            $('#created_at').text("Date Not Found");
                        } else {
                            $('#created_at').text(data.user.created_at);
                        }
                        if (data.user.role == "" || data.user.role == null) {
                            $('#role').text("Role Not Found");
                        } else {
                            $('#role').text(data.user.role);
                        }
                    }
                })
            })
        })
    </script>

</div>
@endsection