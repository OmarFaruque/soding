@extends('master')
@section('content')
                <div class="title m-b-md">
                    SODING: INDIVIDUAL ASSIGNMENT
                </div>

                <div class="links">
                    <a href="{{url('/create-task')}}">Create Task</a>
                    <a href="{{url('/tasks-list')}}">List All Task</a>
                </div>
@endsection
