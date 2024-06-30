<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $employee->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $employee->email }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
