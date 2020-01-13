@extends('layouts.admin')

@section('content')

<div class="card uper">
  <div class="card-header">
    Edit Share
  </div>
  <div class="card-body">
      <form method="post" action="{{ route('buses.update', $bus->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="code"> Code:</label>
          <input type="text" class="form-control" name="code" value={{ $bus->code }} />
        </div>
         <div class="form-group">
          <label for="user_name"> User Name:</label>
          <input type="text" class="form-control" name="user_name" value={{ $bus->user_name }} />
        </div>
        <div class="form-group">
          <label for="driver_name">Driver Name:</label>
          <input type="text" class="form-control" name="driver_name" value={{ $bus->driver_name }} />
        </div>
        
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" class="form-control" name="phone" value={{ $bus->phone}} />
        </div>
          
        <div class="form-group">
          <label for="password">password:</label>
          <input type="text" class="form-control" name="password" value={{ $bus->password}} />
        </div>
         
         <div class="form-group">
          <label for="driver_id">Driver ID:</label>
          <input type="text" class="form-control" name="driver_id" value={{ $bus->address}} />
        </div>

          <div class="form-group">
              <label for="start_work_time">Start Time</label>
              <input type="time" class="form-control" name="start_work_time" value="{{$bus->start_work_time}}"/>
          </div>

          <div class="form-group">
              <label for="end_work_time">End Time</label>
              <input type="time" class="form-control" name="end_work_time" value="{{$bus->end_work_time}}"/>
          </div>
        <button type="submit" class="btn btn-outline-primary">Update</button>
      </form>
  </div>
</div>
@endsection