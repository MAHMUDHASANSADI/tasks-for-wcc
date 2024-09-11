<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Task Manager</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Task Manager</h1>

        <!-- Search Box -->
        <input type="text" id="search-box" class="form-control" placeholder="Search Tasks...">
        
        <!-- Task List -->
        <ul id="task-list" class="list-group mt-3"></ul>

        <!-- Add New Task -->
        <div class="input-group mt-4">
            <input type="text" id="new-task" class="form-control" placeholder="Add New Task">
            <button id="add-task" class="btn btn-primary">Add Task</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.0/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/tasks.js') }}"></script>
</body>
</html>
