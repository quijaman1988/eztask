@extends('layouts.master')

@section('content')

    <h1>Hi {{ $user->first_name  }}</h1>

    <nav>
       <ul>
              <li><a href='/books'>View all Tasks</a></li>

              <li><a href='/book/search'>View Incomplete Tasks</a></li>
               <li><a href='/book/create'>View Complete Tasks</a></li>
               <li><a href='/book/create'>Create New Task</a></li>
               <li><a href='/logout'>Logout {{$user->name}}</a></li>


       </ul>
   </nav>




@stop
