@extends('layouts.admin')

@section('content')
 <div class="col-12 grid-margin stretch-card">
              <div class="card uper">
                <div class="card-header">
                  Add Bus
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
                    <form method="post" action="{{ route('buses.store') }}">
              
                       <div class="form-group">
                        @csrf
                        <label for="code">Code :</label>
                         <input type="text" class="form-control" name="code"/>
                        </div>
              
                          <div class="form-group">
                        @csrf
                          <label for="user_name">User Name :</label>
                         <input type="text" class="form-control" name="user_name"/>
                        </div>
              
                        <div class="form-group">
                            @csrf
                        <label for="driver_name">Driver Name:</label>
                        <input type="text" class="form-control" name="driver_name"/>
                        </div>
              
                        
              
                        <div class="form-group">
                        @csrf 
                          <label for="phone">Phone:</label>
                           <input type="text" class="form-control" name="phone"/>
                        </div>
              
                         <div class="form-group">
                            @csrf
                            <label for="password">password</label>
                            <input type="text" class="form-control" name="password"/>
                        </div>
              
                        <div class="form-group">
                          @csrf
                            <label for="driver_id">Driver ID :</label>
                            <input type="text" class="form-control" name="driver_id"/>
                        </div>

                        <div class="form-group">
                            <label for="start_work_time">Start Time</label>
                            <input type="time" class="form-control" name="start_work_time"/>
                        </div>
              
                        <div class="form-group">
                            <label for="end_work_time">End Time</label>
                            <input type="time" class="form-control" name="end_work_time"/>
                        </div>
                       
              <button type="submit" class="btn btn-outline-primary btn btn-lg">Add</button>
                    </form>
                </div>
              </div>



@endsection