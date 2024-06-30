<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
    <a href="{{ url('/') }}" class="btn btn-primary">Go to Dashboard</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->title }}</td>
                <td>{{ $course->description }}</td>
                <td>
                    <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
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
