<?php

use App\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Carlos Vieira',
    new \DateTimeImmutable('1982-09-11')
);

echo $student->age();
