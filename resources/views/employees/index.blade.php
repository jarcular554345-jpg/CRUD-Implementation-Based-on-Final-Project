@extends('layouts.app')

@section('content')

<h2>Employee List</h2>

<a href="{{ route('employees.create') }}" class="btn btn-primary mb-3">Add Employee</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Position</th>
    <th>Action</th>
</tr>

@foreach($employees as $employee)
<tr>
    <td>{{ $employee->id }}</td>
    <td>{{ $employee->name }}</td>
    <td>{{ $employee->email }}</td>
    <td>{{ $employee->position }}</td>
    <td>
        <a href="{{ route('employees.edit',$employee->id) }}" class="btn btn-warning btn-sm">Edit</a>

        <form action="{{ route('employees.destroy',$employee->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">Delete</button>
        </form>
    </td>
</tr>
@endforeach

</table>

@endsection