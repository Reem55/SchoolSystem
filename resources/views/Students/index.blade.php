@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

<a href="{{ route('Students.create') }}" class="btn btn-outline-primary"> Create Student</a>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>First Name</td>
          <td>Last Name</td>
          <!-- <td>parent Name </td> -->
         
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <!-- <td>{{$student->parent_id}}</td> -->
                      <td><a href="{{ route('Students.edit',$student->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('Students.destroy', $student->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection