@extends('tasks.dashboard')

@section ('head')
<link href="/css/task.css" rel="stylesheet">
<link href="/css/table.css" rel="stylesheet">
<script>
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
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
      <th style="text-align:center"><h3>Status</h3></th>
    </tr>
  </thead>

    <tbody>


  @foreach ($tasks as $task)

  <tr>
      <td>{{ $task->name}}</td>
      <td>{{ $task->priority}}</td>
      <td>{{ $task->type}}</td>
      <td>{{ $task->date}}</td>
      <td> <i class="fa fa-pencil" aria-hidden="true"></i></td>
      <td>
        @if ($task->status == 'Incomplete')
             <i class="fa fa-times" aria-hidden="true"></i>
             @else
             <h3>marry</h3>
             @endif
      </td>
  </tr>

  @endforeach
</tbody>
</table>
</div>



@stop
