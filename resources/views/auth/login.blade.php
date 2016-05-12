@extends('layouts.master')

@section('content')

    <h1 style="color:white;">Welcome to EZ-Task</h1>

    <p style="color:#5E3354">Don't have an account? <a style="color:white;" href='/register'>Register here</a></p>

    <h2 style="color:white;">Login</h2>

    @if(count($errors) > 0)
        <ul class='errors'>
            @foreach ($errors->all() as $error)
                <li><span class='fa fa-exclamation-circle'></span> {{ $error }}</li>
            @endforeach
        </ul>
    @endif



    <form method='POST' action='/'>

        {!! csrf_field() !!}

        <div class='form-group'>
            &nbsp;<label style="color:white; text-align:right" for='email'>Email:</label>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type='text' name='email' id='email' value='{{ old('email') }}'>
        </div>

        <div class='form-group'>
            <label style="color:white;" for='password'>Password:</label>
            <input type='password' name='password' id='password' value='{{ old('password') }}'>
        </div>

        <div class='form-group'>
            <input type='checkbox' name='remember' id='remember'>
            <label for='remember' class='checkboxLabel'>Remember me</label>
        </div>

        <button style="background-color:#03284E; color:white" type='submit' class='btn btn-primary'>Login</button>

    </form>

@stop
