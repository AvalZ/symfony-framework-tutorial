<?php

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

// $input = isset($_GET['name']) ? $_GET['name'] : 'World';
$input = $request->get('name', 'World');

//printf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
$response = new Response(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));

$response->send();
