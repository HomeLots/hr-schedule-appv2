<!DOCTYPE html>
<html>
<head>
    <title>Schedules</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Schedules</h1>
    <a href="{{ route('schedules.create') }}" class="btn btn-primary">Add Schedule</a>
    <a href="{{ url('/') }}" class="btn btn-primary">Go to Dashboard</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Course</th>
            <th>Scheduled Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($schedules as $schedule)
            <tr>
                <td>{{ $schedule->id }}</td>
                <td>{{ $schedule->employee->name }}</td>
                <td>{{ $schedule->course->title }}</td>
                <td>{{ $schedule->scheduled_date }}</td>
                <td>
                    <a href="{{ route('schedules.edit', $schedule->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
