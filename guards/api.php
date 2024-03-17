<?php

use Core\JwtAuth;
use Core\Response;

$allowedRouteWithoutGuard = [
    env('API_PREFIX','api') . '/auth/login'
];

if(!JwtAuth::validateBearerToken() || (empty(jwtAuth()) && !in_array($route, $allowedRouteWithoutGuard)))
{
    echo Response::json([], 'Unauthorized', 401);
    die();
}