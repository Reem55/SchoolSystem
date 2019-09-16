@extends('layouts.admin')

@section('content')

<div class="col-sm-12" style=" background-color: white">
   <div class="card-body">
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

  <a href="{{ route('buses.create') }}" class="btn btn-outline-primary"> Create Buses</a>

      <h3> Buses</h3>

  <table class="table table-striped">
 <thead>
        <tr>
          <td>ID</td>
          <td>code</td>
          <td>User Name</td>
          <td>Driver Name</td>
          <td>Phone</td>
          <td>password</td>
          <td>Driver ID</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($buses as $bus)
        <tr>
            <td>{{$bus->id}}</td>
            <td>{{$bus->code}}</td>
            <td>{{$bus->user_name}}</td>
            <td>{{$bus->driver_name}}</td>
            <td>{{$bus->phone}}</td>
            <td>{{$bus->password}}</td>
            <td>{{$bus->driver_id}}</td>
         
            <td><a href="{{ route('buses.edit',$bus->id)}}" class="btn btn-outline-primary">Edit</a></td>
            <td>
                <form action="{{ route('buses.destroy', $bus->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
</div>
@endsection