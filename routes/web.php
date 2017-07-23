<?php

Route::group(['prefix' => 'painel'], function() {
    

    // PostController
    Route::get('posts', 'Painel\PostController@index');

    // PermissionsController
    Route::get('permissions', 'Painel\PermissionController@index');
    Route::get('permission/{id}/roles', 'Painel\PermissionController@roles');



    // RolesController
    Route::get('roles', 'Painel\RoleController@index');
    Route::get('roles/{id}/permissions', 'Painel\RoleController@permissions');

    // UsersController
    Route::get('users', 'Painel\UserController@index');
    Route::get('user/{id}/roles', 'Painel\UserController@roles');



    Route::get('/', 'Painel\PainelController@index');
});

Auth::routes();

Route::get('/', 'Portal\SiteController@index');