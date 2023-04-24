<?php
  function addTodoList(string $todo)
  {
    global $todoList;

    $number = is_array($todoList) ? sizeof($todoList) : 0;
    $number = $number + 1;
    $todoList[$number] = $todo;
  }
