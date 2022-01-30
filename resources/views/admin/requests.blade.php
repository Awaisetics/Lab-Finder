@extends('layouts.app')
@section('title','Requests')
@section('content')

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
                    <h4 class="card-title">Laborateries Requests</h4>
                </div>
                <div class="card-body">
                    <!-- Table with outer spacing -->
                    @if(count($users)>0)
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>Due Date</th>
                                    <th>LOCATION</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="text-bold-500">{{ $user->name }}</td>
                                    <td> {{ $user->email }} </td>
                                    <td class="text-bold-500"> {{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }} </td>
                                    <td> {{ $user->location }} </td>
                                    <td>
                                        <div class="row">
                                            <span id="btn" value="{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-show font-medium-1"></i></span>
                                            <a style="margin: 7px 0 0 7px; float:right" href="/admin/lab/approve/{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-check font-medium-1"></i></a>
                                            <a style="margin: 7px 0 0 7px; float:right" href="/admin/lab/reject/{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-x-circle font-medium-1"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <p>No Record</p>
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
                    <h5 class="modal-title" id="exampleModalLabel"> <b class="name">'s</b> information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row invoice-info">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#btn', function() {
                let id = $(this).attr('value');
                $.ajax({
                    type: 'GET',
                    url: "/admin/getUser/" + id,
                    data: {
                        _token: "{{  csrf_token() }}"
                    },
                    success: function(data) {
                        $('#exampleModal').modal('show');
                        if(data.user.name == "" || data.user.name == null)
                        {
                            $('.name').text("Name Not Found");
                        }
                        else
                        {
                            $('.name').text(data.user.name);
                        }
                        if(data.user.location == "" || data.user.location == null)
                        {
                            $('#location').text("Location Not Found");
                        }
                        else
                        {
                            $('#location').text(data.user.location);
                        }
                        if(data.user.created_at == "" || data.user.created_at == null)
                        {
                            $('#created_at').text("Date Not Found");
                        }
                        else
                        {
                            $('#created_at').text(data.user.created_at);
                        }
                        if(data.user.role == "" || data.user.role == null)
                        {
                            $('#role').text("Role Not Found");
                        }
                        else
                        {
                            $('#role').text(data.user.role);
                        }
                    }
                })
            })
        })
    </script>

</div>
@endsection