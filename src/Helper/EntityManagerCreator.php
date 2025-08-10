<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\ORMSetup;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;

class EntityManagerCreator
{
    public static function createEntityManager(): EntityManager
    {
        // Configuração para usar Attributes
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . '/..'],
            isDevMode: true
        );

        // Configuração do banco de dados
        $connection = DriverManager::getConnection([
            'driver' => 'pdo_sqlite',
            'path'   => __DIR__ . '/../../db.sqlite',
        ], $config);

        // Aqui o create() existe porque estamos usando a implementação concreta
        return new EntityManager($connection, $config);
    }
}
