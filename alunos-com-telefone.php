<?php

use App\Infraestructure\Persistence\ConnectionCreator;
use App\Infraestructure\Repository\PdoStudentRepository;

require_once 'vendor\autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var \Alura\Pdo\Domain\Model\Student[] $studentList */
$studentList = $repository->studentsWithPhones();

echo $studentList[1]->phones()[0]->formattedPhone();
var_dump($studentList);