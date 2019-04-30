<?php

require "config/bootstrap.php";

$user = new User();

$user->setName('Ben');
$user->setEmail('exemple@mail.com');
$user->setPassword(md5('password'));

//var_dump($user);