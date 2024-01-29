<?php 
   $todo_list = file_get_contents('todo-list.json');

   $list = json_decode($todo_list, true);

// check task
    if (isset($_POST['done'])) {
        $list[$_POST['index']]['done'] = filter_var($_POST['done'], FILTER_VALIDATE_BOOLEAN);;

        file_put_contents('todo-list.json', json_encode($list));
    };
//    delete task
   if (isset($_POST['taskIndex'])) {

        unset($list[$_POST['taskIndex']]);

        file_put_contents('todo-list.json', json_encode($list));
   };
   
//    add task
   if(isset($_POST['text'])){
        $newTask = [
               'text' => $_POST['text'],
               'done' => false,
        ];

        array_push($list, $newTask);

        file_put_contents('todo-list.json', json_encode($list));
   }

   header('Content-type: application/json');

   echo json_encode($list);
?>