@extends('layouts.admin')

@section('content')

<h1 class="code">{{$sparent->code}}</h1>

<div class="first_name">{{$sparent->first_name}}</div>


<div class="last_name">{{$sparent->last_name}}</div>

<div class="user_name">{{$sparent->user_name}}</div>

<div class="password">{{$sparent->password}}</div>

<div class="mobile_number1">{{$sparent->mobile_number1}}</div>

<div class="mobile_number2">{{$sparent->mobile_number2}}</div>

<div class="address">{{$sparent->address}}</div>

<div>

@foreach ($Sparent->students as $student)

<li>{{student->first_name}}</li>
<li>{{student->last_name}}</li>
@endforeach

	</div>







@endsection