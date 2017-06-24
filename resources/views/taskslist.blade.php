@extends('master')
@section('content')
	<div class="container">
	    <div class="lists m-b-md">
	    <div class="listPage">
			@include('internalmenu')	
		</div>
			@if(session()->has('message'))
			    <div class="alert alert-success">
			        {{ session()->get('message') }}
			    </div>
			@endif
	    	<div class="container" id="content" tabindex="-1">
	    	@if($tasks)
	    		<table class="table table-bordered">
	    			<h2><caption><b>All Tasks</b></caption></h2>
	    			<thead>
	    				<tr>
	    					<th class="text-center">ID</th>
	    					<th class="text-center">Name</th>
	    					<th class="text-center">Description</th>
	    					<th class="text-center">Created Date</th>
	    					<th class="text-center">Update Date</th>
	    					<th class="text-center">Action</th>
	    				</tr>
	    			</thead>
	    			<tbody>
	    				@foreach($tasks as $task)
	    					<tr>
	    						<td colspan="" rowspan="" headers="">{{$task->id}}</td>
	    						<td colspan="" rowspan="" headers="">{{$task->name}}</td>
	    						<td colspan="" rowspan="" headers="">{{$task->description}}</td>
	    						<td colspan="" rowspan="" headers="">{{Carbon\Carbon::parse($task->created_at)->format('d-m-Y')}}</td>
	    						<td colspan="" rowspan="" headers="">{{Carbon\Carbon::parse($task->updated_at)->format('d-m-Y')}}</td>
	    						<td colspan="" rowspan="" headers=""><a href="{{url('/edit-task/'.$task->id)}}">Edit</a>  &nbsp;|&nbsp;  <a href="{{url('/delete-task/'.$task->id)}}">Delete</a></td>
	    					</tr>
	    				@endforeach
	    			</tbody>
	    		</table>
	    		
	    	@endif
	    	</div>
	    </div>
    </div>
@endsection
