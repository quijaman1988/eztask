@extends('tasks.dashboard')

@section ('head')
<link href="/css/task.css" rel="stylesheet">
<link href="/css/table.css" rel="stylesheet">
@stop

@section ('data')
<br>
<br>
<h1 style="color:white">All Tasks</h1>
<div class="table-responsive">
<table class="table" border="0" style="width:100%; color:white;">
  <thead>
    <tr>


      <th style="text-align:center"><h3>Task Name</h3></th>
      <th style="text-align:center"><h3>Priority</h3></th>
      <th style="text-align:center"><h3>Type</h3></th>
      <th style="text-align:center"><h3>Date</h3></th>
      <th style="text-align:center"><h3>Edit</h3></th>
      <th style="text-align:center"><h3>Delete</h3></th>
      <th style="text-align:center"><h3>Details</h3></th>
    </tr>
  </thead>

    <tbody>


  @foreach ($tasks as $task)
  @if ($task->status == 'Incomplete')
       <tr style="background-color:#F1355D">
  @else
       <tr style="background-color:#7B36C1">
  @endif

      <td>{{ $task->name}}</td>
      <td>{{ $task->priority}}</td>
      <td>{{ $task->type}}</td>
      <td>{{ $task->date}}</td>
      <td> <a style="color:white;" href="/task/edit/{{$task->id}}"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</a></td>
      <td><i class="fa fa-times" aria-hidden="true"></i> Delete</td>
      <td><a style="color:white;" href="/task/detail/{{$task->id}}"><i class="fa fa-eye" aria-hidden="true"></i>View</a></td>
  </tr>

  @endforeach
</tbody>
</table>
</div>



@stop
