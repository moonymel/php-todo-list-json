<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    
    <div id="app">
        <div class="container my-4">
            <div class="row">
                <div class="col-6">
                    <h2>ToDo List</h2>
                    <ul class="unstyled-list">
                        <li v-for="todo, key in todoList" :key="key">
                            {{ todo.task }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>


    </div>

    <script type="text/javascript" src="./js/script.js"></script>
</body>

</html>