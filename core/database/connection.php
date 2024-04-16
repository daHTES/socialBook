<?php

$hostDetails = 'mysql:host=localhost; dbname=facebook; charset=utf8mb4';
$userAdmin = 'root';
$pass = '';

try {
    $pdo = new PDO($hostDetails, $userAdmin, $pass);
} catch ( PDOException $e){
       echo 'Connection error' . $e->getMessage();
}
