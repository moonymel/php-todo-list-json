<?php 

    //recupero file json
    $todo_list = file_get_contents('todo-list.json');

    header('Content-type: application/json');

    echo $todo_list;

?>