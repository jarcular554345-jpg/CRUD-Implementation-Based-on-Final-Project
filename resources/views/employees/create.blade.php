@extends('layouts.app')

@section('content')

<h2>Add Employee</h2>

<form action="{{ route('employees.store') }}" method="POST">
@csrf

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="text" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Position</label>
<input type="text" name="position" class="form-control">
</div>

<button class="btn btn-success">Save</button>

</form>

@endsection