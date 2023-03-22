<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>todo list</title>
</head>
<body>
    <div id="app">
        <div class="container mx-auto pb-3">
            <div class="text-center bg-gradient-to-r from-white via-teal-400 to-white">
                <h1 class="text-xl font-semibold">ToDo List</h1>
            </div>

            <div class="container mx-auto py-3 bg-gradient-to-r from-white via-teal-400 to-white">
                <ul class="list-none">
                    <li v-for="task in toDoList" :key="task" class="flex justify-center mb-2 border-4 border-teal-200 border-b-teal-700 text-white p-1">
                        <p>{{task}}</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="./main.js"></script>
</body>
</html>