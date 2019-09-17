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

        <a href="{{ route('Sparents.create') }}" class="btn btn-outline-primary"> Create Parent</a>
        <table class="table table-striped">
            <thead>
            <tr>
                <td>Code</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Username</td>
                <td>Mobile</td>
                <td>Mobile 2</td>
                <td>Address</td>
                <td>Student Name</td>

            </tr>
            </thead>
            <tbody>
            @foreach($Sparents as $sparent)



                <tr>
                    <td> {{ $sparent->code }}</td>
                    <td>  {{ $sparent->first_name }}</td>
                    <td>  {{ $sparent->last_name }}</td>
                    <td>  {{ $sparent->user_name }}</td>
                    <td>  {{ $sparent->mobile_number1 }}</td>
                    <td>  {{ $sparent->mobile_number2 }}</td>
                    <td>  {{ $sparent->address }}</td>
                    @foreach ($sparent->students  as $student)
                    <td> {{ $student->name}}</td>
                    @endforeach

                    <td><a href="{{ route('Sparents.edit',$sparent->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form action="{{ route('Sparents.destroy', $sparent->id)}}" method="post">
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
