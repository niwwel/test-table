<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="form-add.css">

  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <link href="/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <title>Document</title>
</head>
<body>


<?php
    include_once("./model/tasks.php");
    $tasks = getTasks(); 
    createTask ($name, $age, $salary, $email, $phone);

?> 

<header>Добавьте данные</header>



<form action="/create-task.php" method="post" id="form" class="topBefore">
    <p>ФИО</p>
    <input type="text" name="name" value="<?=$name;?>">
    <p>Возвраст</p>
    <input type="text" name="age" value="<?=$age;?>">
    <p>Зарплата</p>
    <input type="text" name="salary" value="<?=$salary;?>">
    <p>Email</p>
    <input type="text" name="email" value="<?=$email;?>">
    <p>Телефон</p>
    <input type="text" name="phone" value="<?=$phone;?>"><br><br>
    

    <input id="submit" type="submit" name="addUser">
  
</form>



</body>
</html>

