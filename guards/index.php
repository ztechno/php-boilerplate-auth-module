<?php

$auth = auth();
$publicRoutes = [
    'auth/login',
    'exam/test'
];

if(empty($auth) && !in_array($route, $publicRoutes))
{
    header("location: ".routeTo('auth/login'));
    die();
}

if($auth && $route == 'auth/login')
{
    header("location: ".env('AUTH_AFTER_LOGIN_SUCCESS','/'));
    die();
}