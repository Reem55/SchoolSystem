@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Parent
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('Sparents.store') }}">
          <div class="form-group">
              @csrf
              <label for="code">Code:</label>
              <input type="text" class="form-control" name="code"/>
          </div>

          <div class="form-group">
              <label for="first_name">First Name:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="user_name">User Name:</label>
              <input type="text" class="form-control" name="user_name"/>
          </div>

          <div class="form-group">
              <label for="password">password:</label>
              <input type="text" class="form-control" name="password"/>
          </div>

                  <div class="form-group">
              <label for="mobile_number1">First Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number1"/>
          </div>

           <div class="form-group">
              <label for="mobile_number2">second Mobile Number:</label>
              <input type="text" class="form-control" name="mobile_number2"/>
          </div>

            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" name="address"/>
          </div>

           <label for="">student</label>
          <select name="student_id" id="" class="form-control">
            @foreach ($students as $student)
            <option value="{{ $student->id}}"> {{$student->name}}</option> 
               
             @endforeach
                          </select>
                          <br>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection