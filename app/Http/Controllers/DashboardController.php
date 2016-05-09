<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
  public function getIndex() {
    $user = \Auth::user();

    $tasks = \App\Task::where('user_id','=',$user->id)->get();

    //dump ($tasks);

    return view ('tasks.welcome')->with('users',$user)
    ->with('tasks',$tasks);
 }

  public function createTask() {
      $user = \Auth::user();

      return view ('tasks.create')->with('users',$user);
  }

  public function postCreate(Request $request) {

    $this->validate($request,[
            'name' => 'required|min:3',
            'priority' => 'required',
            'type' => 'required|min:3',
            'date' => 'required'

        ]);

        $task = new \App\Task();
        $task->name = $request->name;
        $task->priority = $request->priority;
        $task->type = $request->type;
        $task->date = $request->date;
        $task->user_id = \Auth::id();
        $task->save();

        \Session::flash('message','Your task has been added');

        return redirect('/dashboard');




  }



}
