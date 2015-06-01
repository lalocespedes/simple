<?php

use lalocespedes\User\User;

ini_set('display_errors', 'On');

define('INC_ROOT', dirname(__DIR__));

require INC_ROOT . '/vendor/autoload.php';

$user = new User;

$user->example($var = 'q onda');