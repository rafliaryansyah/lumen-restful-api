<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->group(['prefix' => 'api/v1', 'namespace' => 'student'], function () use ($router){
    $router->group(['prefix' => 'students'], function () use ($router){

        $router->get('create', 'StudentController@create');
        $router->get('{id}', 'StudentController@detailStudent');
        $router->patch('{id}/update', 'StudentController@update');
        $router->get('', 'StudentController@students');
        $router->delete('{id}/delete', 'StudentController@destroy');

    });
});

