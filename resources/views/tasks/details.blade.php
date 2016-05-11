@extends('tasks.dashboard')

@section('title')
    Details
@stop




@section ('data')




<br>
<div id="individual_task">
<h1>Details for "{{ $tasks->name}}" </h1>

<div id="individual_task">

<img src='{{ $details->url_to_picture }}' alt='{{ $tasks->name}}' height='200' width='200'>
<h3>Name: {{ $tasks->name}}</h3>
<h3>Priority: {{ $tasks->priority}} </h3>
<h3>Type: {{ $tasks->type}} </h3>
<h3>Date Due: {{$tasks->date}} </h3>
<h3>Status: {{$tasks->status}} </h3>
<h3>Comments</h3>
<p>{{$details->comment}}</p>

</div>





@stop
