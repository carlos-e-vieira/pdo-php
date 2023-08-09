<?php

use App\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = :id;');
$preparedStatement->bindValue(':id', 3, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
