@extends('layouts.app')
@section('title','Lab Dashboard')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tests</h3>
        <button>Add Test</button>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    @if(count($tests) > 0 )
        <table class="table mb-0">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Fee</th>
                    <th>Time</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                    @foreach($tests as $test)
                    <tr>
                        <td class="text-bold-500">{{$test->title}}</td>
                        <td>{{$test->description}}</td>
                        <td class="text-bold-500">{{$test->fee}}</td>
                        <td>{{$test->time}}</td>
                        <td><a href="javascript:void(0);"><i class="badge-circle badge-circle-light-secondary bx bx-envelope font-medium-1"></i></a></td>
                    </tr>
                    @endforeach
                @else
                    <h4>No Record</h4>
            </tbody>
        </table>
        @endif
    </div>
    </div>
    
</div>

@endsection
