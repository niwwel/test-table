<?php
  
 
  
  // подключение модели
  include_once("./model/tasks.php");


  // валидация запроса
  if (isset($_POST["task_id"]) && is_numeric($_POST["task_id"])) {
    // чтение из запроса
    $taskId = intval($_POST["task_id"]);
  } else {
    http_response_code(400);
    exit();
  }


  // вызываем метод модели
  deleteTask($taskId);

  // редиректим пользователя обратно
  header("Location: " . $_SERVER["HTTP_REFERER"]);
 
