<?php

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManage = EntityManagerCreator::createEntityManager();

$student = $entityManage->find(Student::class, $argv[1]);
$student->name = $argv[2];

$entityManage->flush();