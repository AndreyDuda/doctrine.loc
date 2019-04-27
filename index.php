<?php

require "config/bootstrap.php";

$user = new User();

$user->setName('Ben');
$user->setEmail('exemple@mail.com');
$user->setPassword(md5('password'));

$entityManager->persist($user);
$entityManager->flush();

var_dump($user);