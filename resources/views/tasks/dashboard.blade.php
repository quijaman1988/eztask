@extends('layouts.master')

@section ('head')
<link href="/css/task.css" rel="stylesheet">
@stop

@section('content')



    <h1 style="color:white">Hi {{ $users->name  }}</h1> <br>

    <nav>
       <ul>
              <li><a href='/dashboard'>View all Tasks</a></li>

              <li><a href='/tasks/incomplete'>View Incomplete Tasks</a></li>
               <li><a href='/tasks/complete'>View Complete Tasks</a></li>
               <li><a href='/task/create'>Create New Task</a></li>
               <li><a href='/logout'>Logout {{$users->name}}</a></li>


       </ul>
   </nav>

   <section>
       {{-- Main page content will be yielded here --}}
       @yield('data')
   </section>


@stop
