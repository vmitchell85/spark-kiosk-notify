<?php

Route::group(['middleware' => 'web'], function($router) {
    $router->get('/api/notifications', function(){
        return App\Notification::all();
    });
});
