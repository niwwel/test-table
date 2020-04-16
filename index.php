<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styles.css">
   <link href="/ionicons-2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
  <title>table of workers </title>
</head>
<body>

<?php
      include_once("./model/tasks.php");  
      $tasks = getTasks();  
?> 

<h3 class = "head">СПИСОК СОТРУДНИКОВ</h3>

<table>
  <tr>
    <th>№</th>
    <th>ФИО сотрудника</th>
    <th>Возвраст</th>
    <th>Зарплата</th>
    <th>email</th>
    <th>Телефон</th>
    <th></th>  
  </tr>

  <?php foreach ($tasks as $key => $task) : ?>
 
  <tr>
    <td><?= ++$key ?></td>
    <td><?= $task->name?></td>
    <td><?= $task->age?></td>
    <td><?= $task->salary?></td>  
    <td><?= $task->email?></td> 
    <td><?= $task->phone?></td> 
  
  <td> <form method="POST" 
            action="/delete-task.php" 
            class="trash_item1">
          <input 
            type="hidden" 
            name="task_id" 
            value="<?= $task->id ?>"/>
        
          <button 
            class="outer-btn"
            type="submit"
            href="URL"> <i class="ion-trash-b"></i>
          </button>          
      </form> 
  </td>
 </tr>

<?php endforeach ; ?>

</table>
      <form method="POST" 
            action="/create.php" >
          <button 
              class="outer-btn"
              type="submit"
              href="URL"> <i class="ion-android-person-add"></i>
          </button>          
      </form> 



</body>
</html>




    