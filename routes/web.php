<?php

Route::group(['prefix' => 'painel'], function() {
    // PainelController

    // PostController

    // PermissionsController

    // RolesController
});

Auth::routes();

Route::get('/', 'SiteController@index');