<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = response()->json(Task::all());
        return $tasks;
    }

    public function show($id)
    {
        $tasks = response()->json(Task::find($id));
        return $tasks;
    }

    public function destroy($id){
        Task::find($id)->delete();
        return redirect('/Task/list');    
    }
    
    public function store(Request $request){
    $tasks = new Task;
    $tasks->title = $request->title;
    $tasks->description = $request->description;
    $tasks->end_date = $request->end_date;
    $tasks->user_id = $request->user_id;
    $tasks->status = $request->status;
    $tasks->save();
    return redirect('/Task/list');
    }

    public function update(Request $request, $id){
        $tasks = Task::find($id);
        $tasks->title = $request->title;
        $tasks->description = $request->description;
        $tasks->end_date = $request->end_date;
        $tasks->user_id = $request->user_id;
        $tasks->status = $request->status;
        $tasks->save();
        return redirect('/Task/list');
    }

    public function newView(){
        $users = User::all();
        return view('task.new', ['users' => $users]);
    }

    public function editView($id){
        $users = User::all();
        $tasks = Task::find($id);
        return view('task.edit  ', ['users' => $users, 'task' => $tasks]);
    }

    public function listView(){
        $tasks = Task::all();
        return view('task.list', ['tasks' => $tasks]);
    }
}
