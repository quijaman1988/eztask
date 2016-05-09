@extends('tasks.dashboard')

@section('title')
    Add a New Task
@stop




@section ('data')

<h2>Add a new Task</h2>




    <form method='POST' action='/task/create'>

       {{ csrf_field() }}





       <label>*Task Name:</label>
       <input type="text" id="name" name="name" value="{{ old('name') }}">
        <div class='error'>{{ $errors->first('title') }}</div>
        <br>









        <label>*Type of Task:</label>
        <input type="text" id="type" name="type" value="{{ old('type') }}"><br>
        (Work, Home, Leisure, Family, etc...)
         <div class='error'>{{ $errors->first('type') }}</div> <br>






         <label>*Due Date:</label>
         <input type="date" id="date" name="date" value="{{ old('date') }}">
          <div class='error'>{{ $errors->first('date') }}</div> <br>

        <label>*Priority:</label>
        <select name='priority' id='priority'>
          <option value="Urgent" >Urgent</option>
          <option value="High"selected>High</option>
          <option value="Medium">Medium</option>
          <option value="Low">Low</option>
        </select>
        <br><br>

        <div class='form-instructions'>
           All fields are required
       </div><br>

       <button type="submit" class="btn btn-primary">Add Task</button>

       {{--
        <ul class=''>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        --}}

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

        </form>









    </form>



@stop
