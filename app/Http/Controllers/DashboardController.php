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
            'date' => 'required',
            'url' => 'url',
            'comment' =>'min:5'

        ]);

        $task = new \App\Task();
        $detail = new \App\Detail();

        $task->name = $request->name;
        $task->priority = $request->priority;
        $task->type = $request->type;
        $task->date = $request->date;
        $task->user_id = \Auth::id();
        $task->save();

        $detail->url_to_picture = $request->url;
        $detail->comment = $request->comment;
        $detail->task_id = $task->id;

        $detail->save();

        \Session::flash('message','Your task has been added');

        return redirect('/dashboard');

      }

    public function detailTask ($id) {

      $user = \Auth::user();
      $task = \App\Task::where('id','=',$id)->first();
      //echo $task->name;

      $detail = \App\Detail::where('task_id','=',$id)->first();
      return view('tasks.details')->with('users',$user)
      ->with('tasks',$task)->with('details',$detail);

  }



}
