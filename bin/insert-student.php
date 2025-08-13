<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Aluno com telefones');
$student->addPhone(new Phone('(93) 99999 - 9999'));
$student->addPhone(new Phone('(17) 3322 - 1111'));

$entityManager->persist($student);
$entityManager->flush();