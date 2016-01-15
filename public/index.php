<?php

require __DIR__ . "/../vendor/autoload.php";

echo "hello world? " . time() . "<br/>";

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('../output/app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

$logit = new ctl\test\greg\LogIt();
$logit->logSomething("test text");