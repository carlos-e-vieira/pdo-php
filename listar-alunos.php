<?php

use App\Domain\Model\Student;
use App\Infrastructure\Persistence\ConnectionCreator;
use App\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($pdo);
$studentList = $repository->allStudents();

echo '<pre>';
print_r($studentList);
echo '</pre>';
