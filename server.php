<?php 
   $todo_list = file_get_contents('todo-list.json');

   $list = json_decode($todo_list, true);
   
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