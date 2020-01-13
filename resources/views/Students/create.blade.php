@extends('layouts.admin')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add student
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
      <form method="post" action="{{ route('Students.store') }}">

         <div class="form-group">
          @csrf
          <label for="name">student Name :</label>
           <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
            <label for="">Bus :</label>
            <select name="bus_id" class="form-control">
              @foreach ($buses as $bus)
                <option value="{{ $bus->id}}"> {{$bus->code}}</option>
              @endforeach
            </select>
            <br>
          </div>
          <!-- <div class="form-group">
            <label for="">parent</label>
          <select name="parent_id" id="" class="form-control">
            @foreach ($parents as $sparent)
            <option value="{{ $sparent->id}}"> {{$sparent->first_name}}</option> 
               
             @endforeach
                          </select>
 -->
                <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection