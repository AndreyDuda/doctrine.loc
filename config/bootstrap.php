<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once 'vendor/autoload.php';
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration(array("src"), $isDevMode);

$connection = array(
    'dbname'   => 'doctrine',
    'user'     => 'doctrine',
    'password' => 'doctrine',
    'host'     => '127.0.0.1',
    'driver'   => 'pdo_mysql',
    'port'     => '3306'
);

$entityManager = EntityManager::create($connection, $config);