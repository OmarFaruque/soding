@extends('master')
@section('content')
	<div class="container">

	    <div class="create m-b-md">
	    <div class="col-md-2 col-sm-2">
	    	@include('internalmenu')
	    </div>
	    <div class="col-md-10 col-sm-10">
	    		@if(session()->has('message'))
				    <div class="alert alert-success">
				        {{ session()->get('message') }}
				    </div>
				@endif
	    	<h2 class="text-capitalize" style="margin-top:15px; margin-bottom:20px;">New Task</h2>
	        {!!Form::open(['url' => (!empty($task))?'update-task/'.$task->id:'create-task', 'class' => 'form-inline'])!!}
	        	<div class="row">
		        	<fieldset>
		        		<div class="col-sm-2 col-md-2 text-right">
		        			{!!Form::label('name', 'Name: ')!!}			
		        		</div>	
		        		<div class="col-sm-10 col-md-10 text-left">
		        			{!!Form::text('name', (!empty($task))?$task->name:'', array('class'=>'form-control'))!!}	
		        		</div>	
		        	</fieldset>
	        	</div>
	        	<div class="row">
		        	<fieldset>
		        		<div class="col-sm-2 col-md-2 text-right">
		        			{!!Form::label('description', 'Description: ')!!}			
		        		</div>	
		        		<div class="col-sm-10 col-md-10 text-left">
		        			{!!Form::textarea('description', (!empty($task))?$task->description:'', array('class'=>'form-control'))!!}	
		        			<br>
		        			{!!Form::submit('Submit', array('class'=>'btn btn-primary') )!!}
		        		</div>	
		        	</fieldset>
		        	
	        	</div>
	        {!!Form::close()!!}
	        </div>
	    </div>
    </div>
@endsection
