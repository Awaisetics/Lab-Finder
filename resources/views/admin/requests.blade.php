@extends('layouts.app')
@section('title','Requests')
@section('content')

<div class="content-body">
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
                                        <a data-toggle="modal" data-target="#exampleModal"><i class="badge-circle badge-circle-light-secondary bx bx-show font-medium-1"></i></a>
                                        <a href="/admin/lab/approve/{{$user->id}}"><i class="badge-circle badge-circle-light-secondary bx bx-check font-medium-1"></i></a>
                                        <a href="javascript:void(0);"><i class="badge-circle badge-circle-light-secondary bx bx-x-circle font-medium-1"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Basic Tables end -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> <b>{{$user->name}}'s</b> information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row invoice-info">
                        <div class="col-sm-6 col-12 mt-1">
                            <div class="mb-1">
                                <p> <span style="font-size: 18px;">Name :</span> {{$user->name}} </p>
                            </div>
                            <div class="mb-1">
                                <p> <span style="font-size: 18px;">Location :</span> {{$user->location}} </p>
                            </div>
                            <div class="mb-1">
                                <p> <span style="font-size: 18px;">Date :</span> {{$user->created_at}} </p>
                            </div>
                            <div class="mb-1">
                                <p> <span style="font-size: 18px;">Role :</span> {{$user->role}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">View Tests</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    @endforeach
    @else
    <p>No Record</p>
    @endif


</div>
@endsection