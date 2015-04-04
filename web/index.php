<?php

$loader = require __DIR__ . '/../vendor/autoload.php';

$app = Songbird\AppFactory::createApplication(__DIR__ . '/../config');

$response = $app->run();

$response->send();