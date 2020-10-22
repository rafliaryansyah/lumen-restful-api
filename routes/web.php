<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'api/v1', 'namespace' => 'student'], function () use ($router){

    $router->get('students/create', 'StudentController@create');
    $router->get('students/{id}', 'StudentController@detailStudent');

});

