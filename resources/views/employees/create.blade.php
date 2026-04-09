@extends('layouts.app')

@section('content')

<h2 class="text-2xl font-bold text-white mb-4">Add Employee</h2>

<form action="{{ route('employees.store') }}" method="POST">
@csrf

<div class="mb-4">
<label class="block text-white mb-1">Name</label>
<input type="text" name="name"
    class="w-full px-3 py-2 rounded bg-gray-800 text-white border border-gray-600 focus:outline-none focus:border-blue-500">
</div>

<div class="mb-4">
<label class="block text-white mb-1">Email</label>
<input type="text" name="email"
    class="w-full px-3 py-2 rounded bg-gray-800 text-white border border-gray-600 focus:outline-none focus:border-blue-500">
</div>

<div class="mb-4">
<label class="block text-white mb-1">Position</label>
<input type="text" name="position"
    class="w-full px-3 py-2 rounded bg-gray-800 text-white border border-gray-600 focus:outline-none focus:border-blue-500">
</div>

<button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">
Save
</button>

</form>

@endsection