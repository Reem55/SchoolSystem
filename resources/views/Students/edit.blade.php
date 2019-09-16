@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('Students.update', $student->id) }}">
        @method('PATCH')
        @csrf
               <div class="form-group">
          <label for="name">Student Name:</label>
          <input type="text" class="form-control" name="first_name" value={{ $student->name }} />
        </div>
      
              
             <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection