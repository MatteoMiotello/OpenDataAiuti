<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '../vend<or/autoload.php';

require __DIR__ . '../application/Application.php';

( new Application() )->main();