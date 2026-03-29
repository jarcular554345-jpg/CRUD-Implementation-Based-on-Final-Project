<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand">EMS</a>

    <ul class="navbar-nav">

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('employees.create') ? 'active' : '' }}" href="{{ route('employees.create') }}">Add Employee</a>
        </li>

    </ul>
</div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>