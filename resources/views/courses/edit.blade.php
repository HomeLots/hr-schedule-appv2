<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Edit Course</h1>
    <form action="{{ route('courses.update', $course->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" value="{{ $course->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required>{{ $course->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</body>
</html>
