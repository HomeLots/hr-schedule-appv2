<!DOCTYPE html>
<html>
<head>
    <title>Create Schedule</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Create Schedule</h1>
    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="employee_id">Employee:</label>
            <select name="employee_id" class="form-control" required>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="course_id">Course:</label>
            <select name="course_id" class="form-control" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}">{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="scheduled_date">Scheduled Date:</label>
            <input type="date" name="scheduled_date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
</body>
</html>
