<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="app">
        <main class="bg-image py-5">
            <div class="box mx-auto">
                <div class="row">

                    <!-- Title -->
                    <div class="col-12">
                        <h1 class="text-center pt-4">Chilling ToDoList</h1>
                    </div>

                    <!-- Add Task -->
                    <div class="col-12">
                        <div class="d-flex justify-content-center px-4 pt-4">
                            <input class="align-middle form-control form-control-sm shadow-none border-0 w-75" type="text" placeholder="Add Your Task..." @keyup.enter="addTask" v-model="newTask">
                            <button type="button" class="btn btn-sm bg-125768 text-light mx-2" id="add-task" @click="addTask">Add Task</button>
                        </div>
                    </div>
    
                    <!-- Tasks List -->
                    <div class="col-12">
                        <div class="p-4">
                            <ul class="list-unstyled">

                                <!-- list title -->
                                <li class="d-flex justify-content-between fw-bold">
                                    <!-- todo title -->
                                    <span>Tasks</span>
                                    
                                    <!-- button title -->
                                    <span class="mb-1">
                                        <span class="p-2">check</span>
                                        <span class="p-2">delete</span>
                                    </span>
                                </li>

                                <!-- list -->
                                <li class="d-flex justify-content-between"  v-for="(todo, index) in todoList" :key="index">
                                    <!-- todo item -->
                                    <span class="my-pointer" :class="todo.done ? 'text-decoration-line-through' : ''"  @click="todo.done = !todo.done">{{todo.text}}</span>
                                    
                                    <!-- Buttons trash and check/xmark -->
                                    <span class="mb-1 my-marg">
                                        <button class="btn border-0" @click="todo.done = !todo.done">
                                            <i class="fas" :class=" todo.done == true ? 'fa-check text-success' : 'fa-xmark text-danger' "></i>
                                        </button>
                                        <button class="btn border-0" @click="deleteTask(index)">
                                            <i class="fas fa-sm fa-trash-can"></i>
                                        </button>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>