<?php

require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Symfony\Component\HttpKernel;
use Symfony\Component\EventDispatcher\EventDispatcher;

$dispatcher = new EventDispatcher();
$dispatcher->addSubscriber(new Simplex\ContentLengthListener());
$dispatcher->addSubscriber(new Simplex\GoogleListener());

$framework = new Simplex\Framework($dispatcher, $matcher, $resolver);
$framework = new HttpKernel\HttpCache\HttpCache($framework, new HttpKernel\HttpCache\Store(__DIR__.'/../cache'));

$response = $framework->handle($request)->send();
