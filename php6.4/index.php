<?php
require 'vendor/autoload.php';


use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('php6.4', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

?>