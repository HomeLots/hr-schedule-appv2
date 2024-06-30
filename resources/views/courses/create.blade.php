<!DOCTYPE html>
<html>
<head>
    <title>Create Course</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container">
    <h1>Create Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
</body>
</html>
