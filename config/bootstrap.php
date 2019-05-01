<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array("src"), $isDevMode);

$connection = array(
    'dbname'   => 'doctrine',
    'user'     => 'doctrine',
    'password' => 'doctrine',
    'host'     => 'mysql',
    'driver'   => 'pdo_mysql'
);

$entityManager = EntityManager::create($connection, $config);