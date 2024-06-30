<!DOCTYPE html>
<html>
<head>
    <title>Edit Schedule</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Edit Schedule</h1>
    <form action="{{ route('schedules.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_id">Employee:</label>
            <select name="employee_id" class="form-control" required>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}" {{ $schedule->employee_id == $employee->id ? 'selected' : '' }}>{{ $employee->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="course_id">Course:</label>
            <select name="course_id" class="form-control" required>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" {{ $schedule->course_id == $course->id ? 'selected' : '' }}>{{ $course->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="scheduled_date">Scheduled Date:</label>
            <input type="date" name="scheduled_date" class="form-control" value="{{ $schedule->scheduled_date }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
