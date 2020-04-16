<?php
    
  // подключение модели
  include_once("./model/tasks.php");
 

  
  // валидация запроса
  if (isset($_POST['addUser']))  {
    // чтение из запроса
    $name = ($_POST["name"]); 
    // чтение из запроса   
     $age = ($_POST["age"]);  
    // чтение из запроса
    $salary = ($_POST["salary"]);

    $email = ($_POST["email"]);
     
    $phone = ($_POST["phone"]);
  } 



  // вызываем метод модели
  createTask ($name, $age, $salary, $email, $phone);

  // редиректим пользователя обратно
  header('Location: ../index.php');
