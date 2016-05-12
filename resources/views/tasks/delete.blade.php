
@extends('tasks.dashboard')

@section('title')
    Delete a tasks
@stop

@section('content')
    <h1>Delete Task</h1>
    <h2>Are you sure you want to delete the task: <em>{{$tasks->name}}</em>?</h2>
    <h3><strong><a style="color:#03264C; text-decoration:none" href='/task/delete/{{$tasks->id}}'>Yes, delete it.</a></strong></h3>
    <h3><a style="color:#03264C; text-decoration:none " href='/'>No, I changed my mind.</a></h3>
@stop
