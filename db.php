<?php

$host = 'localhost';
$db = 'db';
$user = 'root';
$pass = '';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

} catch(PDOExeption $e) {
  echo "ошибка соединения с БД ".$e->getMessage();
}
