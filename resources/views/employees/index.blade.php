@extends('layouts.app')

@section('content')

<h2 class="text-white">Employee List</h2>

@auth
    @if(auth()->user()->role == 'admin')
        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-3 text-white">
    Add Employee
</a>
    @endif
@endauth

<table class="table table-bordered text-white">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Position</th>
    @auth
        @if(auth()->user()->role == 'admin')
            <th>Action</th>
        @endif
    @endauth
</tr>

@foreach($employees as $employee)
<tr>
    <td>{{ $employee->id }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->position }}</td>

    @auth
        @if(auth()->user()->role == 'admin')
        <td>
            <a href="{{ route('employees.edit',$employee->id) }}" 
               class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('employees.destroy',$employee->id) }}" 
                  method="POST" 
                  style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
        @endif
    @endauth

</tr>
@endforeach

</table>

@endsection