<?php
  require_once "../View/ViewAddTodoList.php";
  require_once "../BusinessLogic/ShowTodoList.php";
  require_once "../BusinessLogic/AddTodoList.php";

  addTodoList("Eko");
  addTodoList("Kurniawan");
  addTodoList("Khannedy");
  showTodoList();
  viewAddTodoList();
  showTodoList();
  viewAddTodoList();
  showTodoList();
