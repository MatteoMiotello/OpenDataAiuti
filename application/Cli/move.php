<?php

use Library\Database\Db;
use Symfony\Component\Dotenv\Dotenv;
use PDO;

require __DIR__ . '/../../vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/../environment/.env');

