<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;


class USerController extends Controller
{
public function index(){
    $users = response()->json(User::all());
    return $users;
}
public function show($id){
    $user = response()->json(User::find($id));
    return $user;
}

public function listView()
{
$users = Task::all();
return view('user.list', ['tasks' => $users]);
}
}
