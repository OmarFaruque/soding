<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class tasksController extends Controller
{
    public function create(){
    	return view('create');
    }

    /*
    * Insert Task
    */
    public function insert(Request $request){

    	$this->validate($request, [
	        'name' => 'required',
	        'description' => 'required',
    	]);

    	$task = new Tasks;
    	$task->name 		=	$request->name;
    	$task->description 	= 	$request->description;

    	$save = $task->save();
    	if($save){
    		return redirect()->back()->with('message', 'Task Create Successfully.');
    	}else{
    		return redirect()->back()->with('message', 'Task Create Failed.');
    	}
    }

    /*
    * List All Tasks
    */
    public function listtasks(){
    	$tasks = Tasks::all();
    	return view('taskslist')->with('tasks', $tasks);
    }

    /*
	* Edit Tasks
    */
    public function edittasks($id){
    	$task = Tasks::find($id);
    	return view('create')->with('task', $task);
    }


    /*
    * UPdate tasks 
    */
    public function updatetask($id, Request $request){
    	$task 				= Tasks::find($id);
    	$task->name 		= $request->name; 
    	$task->description 	= $request->description; 
    	$update = $task->save();
    	
    	if ($update) {
    		return redirect()->back()->with('message', 'Task Update Successfully.');
    	}else{
    		return redirect()->back()->with('message', 'Task Update Failed.');
    	}
    }

    /*
    * Delete Task
    */
    public function deletetask($id){
    	$task = Tasks::find($id);
    	$delete = $task->delete();
    	if($delete){
    		return redirect()->back()->with('message', 'Task Delete Successfully.');
    	}else{
    		return redirect()->back()->with('message', 'Action Failed.');
    	}
    }
}
