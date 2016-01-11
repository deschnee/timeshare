<?php


$app = require __DIR__.'/bootstrap.php';

$app['debug'] = true;

$app['monolog']->addInfo("server loaded");

$app -> run();



