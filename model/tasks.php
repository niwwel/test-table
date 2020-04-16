<?php
include_once("./db/connection.php");

function getTasks() {
  global $pdo;
  $stmt = $pdo->prepare("SELECT * FROM workers ");
  $stmt->execute();
  $tasks = $stmt->fetchAll(PDO::FETCH_CLASS);
  $stmt = null;
  return $tasks;
}


 function createTask ( $name, $age, $salary,$email, $phone) {
  global $pdo; 
  $stmt = $pdo->prepare(" INSERT INTO workers (name, age, salary, email, phone)
                          VALUES (:name, :age, :salary, :email, :phone)" );
  $stmt->execute ([ ":name" => $name,
                    ":age" => $age,   
                    ":salary" => $salary, 
                    ":email" => $email,
                    ":phone" => $phone]);
                    
  $tasks=$stmt->fetchAll(PDO::FETCH_CLASS);
  $stmt = null;
  
 }  

 function deleteTask(int $taskId) {
  global $pdo;
  $stmt = $pdo->prepare("DELETE FROM workers WHERE id = :id");
  $stmt->execute([ ":id" => $taskId ]);
  $stmt->fetchAll(PDO::FETCH_ASSOC);
  $stmt = null;
}




 

