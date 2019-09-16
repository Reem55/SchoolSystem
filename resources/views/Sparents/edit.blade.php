@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Parent
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('Sparents.update', $Sparent->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="code"> Code:</label>
          <input type="text" class="form-control" name="code" value={{ $Sparent->code }} />
        </div>
         <div class="form-group">
          <label for="first_name"> First Name:</label>
          <input type="text" class="form-control" name="first_name" value={{ $Sparent->first_name }} />
        </div>
         <div class="form-group">
          <label for="last_name"> Last Name:</label>
          <input type="text" class="form-control" name="last_name" value={{ $Sparent->last_name }} />
        </div>
         <div class="form-group">
          <label for="user_name"> User Name:</label>
          <input type="text" class="form-control" name="user_name" value={{ $Sparent->user_name }} />
        </div>
        <div class="form-group">
          <label for="password">password:</label>
          <input type="text" class="form-control" name="password" value={{ $Sparent->password}} />
        </div>
        
        <div class="form-group">
          <label for="mobile_number1">First Mobile Number:</label>
          <input type="text" class="form-control" name="mobile_number1" value={{ $Sparent->mobile_number1}} />
        </div>

         <div class="form-group">
          <label for="mobile_number2">First Mobile Number:</label>
          <input type="text" class="form-control" name="mobile_number2" value={{ $Sparent->mobile_number2}} />
        </div>

         <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" name="address" value={{ $Sparent->address}} />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection