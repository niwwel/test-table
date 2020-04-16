<?php
include_once("./db/mysql-config.php");

function connect() {
  global $mysqlConfig;
  // здесь можно использовать деструктуризацию
  $db = $mysqlConfig['db'];
  $user = $mysqlConfig['user'];
  $password = $mysqlConfig['password'];
  $host = $mysqlConfig['host'];

  $dsn = "mysql:host={$host};dbname=${db};charset=utf8";

  $pdo = new PDO($dsn, $user, $password);

  return $pdo;
}



