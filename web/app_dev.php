<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;

require_once __DIR__ . '/../app/bootstrap.php.cache';
/** @noinspection ForgottenDebugOutputInspection */
Debug::enable();

require_once __DIR__ . '/../app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);
