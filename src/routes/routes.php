<?php

//Route::get('demo', function(){
//    return 'this is a demo';
//});
$namespace = 'Miri92\Mycms\Http\Controllers';

Route::group(['prefix'=>'myadmin', 'namespace'=>$namespace],function(){
    Route::get('demo', 'PostController@index');

    Route::group(['prefix'=>'posts','name'=>'posts'], function(){
        Route::get('/', [
            'uses' => 'PostController@index',
            'as' => 'admin.posts.index'
        ]);
        Route::get('/create', [
            'uses' => 'PostController@create',
            'as' => 'posts.create'
        ]);
        Route::post('/create', 'PostController@store');
        Route::get('/{id}/edit', [
            'uses' => 'PostController@edit',
            'as' => 'admin.posts.edit'
        ]);
        Route::patch('/{id}/edit', 'PostController@update');
        Route::delete('/{id}', [
            'uses' => 'PostController@destroy',
            'as' => 'admin.posts.destroy'
        ]);
    });
    Route::group(['prefix'=>'products','name'=>'products'], function(){
        Route::get('/', [
            'uses' => 'PostController@index',
            'as' => 'admin.products.index'
        ]);
        Route::get('/create', [
            'uses' => 'PostController@create',
            'as' => 'products.create'
        ]);
        Route::post('/create', 'PostController@store');
        Route::get('/{id}/edit', [
            'uses' => 'PostController@edit',
            'as' => 'admin.products.edit'
        ]);
        Route::patch('/{id}/edit', 'PostController@update');
        Route::delete('/{id}', [
            'uses' => 'PostController@destroy',
            'as' => 'admin.products.destroy'
        ]);
    });

    /////////////////////////
    // menus
    /////////////////
    Route::group(['prefix'=>'menus','name'=>'menus'], function(){
        Route::get('/', [
            'uses' => 'MenuController@index',
            'as' => 'admin.menus.index'
        ]);
        Route::get('/create', [
            'uses' => 'MenuController@create',
            'as' => 'menus.create'
        ]);
        Route::post('/create', 'MenuController@store');
        Route::get('/{id}/edit', [
            'uses' => 'MenuController@edit',
            'as' => 'admin.menus.edit'
        ]);
        //Route::patch('/{id}/edit', 'MenuController@update');
        Route::post('/update', [
            'uses' => 'MenuController@update',
            'as' => 'menu_update'
        ]);
        Route::delete('/{id}', [
            'uses' => 'MenuController@destroy',
            'as' => 'admin.menus.destroy'
        ]);
    });
});
