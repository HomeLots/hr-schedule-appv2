<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome to the HR Scheduling App</p>
    <p><a href="{{ route('employees.index') }}" class="btn btn-primary">Manage Employees</a></p>
    <p><a href="{{ route('courses.index') }}" class="btn btn-primary">Manage Courses</a></p>
    <p><a href="{{ route('schedules.index') }}" class="btn btn-primary">Manage Schedules</a></p>
</div>
@vite('resources/js/app.js')
</body>
</html>
