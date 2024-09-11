$(document).ready(function () {
    // Fetch tasks from the server
    function fetchTasks(query = '') {
        axios.get('/tasks', {
            params: { query: query }
        }).then(function (response) {
            const tasks = response.data;
            let taskListHtml = '';
            tasks.forEach(task => {
                taskListHtml += `<li class="list-group-item">${task.title}</li>`;
            });
            $('#task-list').html(taskListHtml);
        });
    }

    // Fetch tasks initially
    fetchTasks();

    // Trigger search on Enter key press
    $('#search-box').on('keypress', function (e) {
        if (e.which === 13) {
            const query = $(this).val();
            fetchTasks(query);
        }
    });

    // Add a new task
    $('#add-task').on('click', function () {
        const taskTitle = $('#new-task').val();
        if (taskTitle.trim() !== '') {
            axios.post('/tasks', {
                title: taskTitle
            }).then(function (response) {
                $('#new-task').val('');
                fetchTasks(); // Refresh task list after adding
            });
        }
    });
});
