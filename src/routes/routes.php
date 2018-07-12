<?php

//Route::get('demo', function(){
//    return 'this is a demo';
//});
$namespace = 'Miri92\Mycms\Http\Controllers';

Route::group(['prefix'=>'myadmin', 'namespace'=>$namespace],function(){
    Route::get('demo', 'PostController@index');
});
