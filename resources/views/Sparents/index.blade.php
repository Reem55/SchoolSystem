@extends ('layouts.admin')
@section('content')

<div class="col-sm-12" style=" background-color: white">
   <div class="card-body">
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif

    
  <table class="table table-striped">
 <thead>
    <div class="col-sm-8 blog-main">
 <tr>
          
          <td>code</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>User Name</td>
          <td>password</td>
          <td>First Mobile Number </td>
          <td>Second Mobile Number </td>
          <td>Address </td>
          <td>student</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>

        @foreach ($Sparents as $sparent)
        @foreach ($students as $student)

        <tr>

      <td> {{ $sparent->code }}</td>
      <td>  {{ $sparent->first_name }}</td>
      <td>  {{ $sparent->last_name }}</td>
      <td>  {{ $sparent->user_name }}</td>
      <td>  {{ $sparent->password }}</td>
      <td>  {{ $sparent->mobile_number1 }}</td>
      <td>  {{ $sparent->mobile_number2 }}</td>
      <td>  {{ $sparent->address }}</td>

      <td> {{ $sparent->student->name ?? '' }} </td>
             
     
                            
           <td><a href="{{ route('Sparents.edit',$sparent->id)}}" class="btn btn-outline-primary">Edit</a></td>
            <td>
                <form action="{{ route('Sparents.destroy', $sparent->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>

        =@endforeach
        @endforeach


    </div>
@endsection