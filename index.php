<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('app');
$log->pushHandler(new StreamHandler('app.log', Logger::WARNING));

// add records to the log
$log->warning('treinaweb');
$log->error('cursos');

echo "OK";