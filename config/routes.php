<?php

use App\Controller\HomeWorkController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
$routes->add('list', '/home_work/list')
->controller([HomeWorkController::class, 'list']);
};