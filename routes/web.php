<?php

Route::get('/', 'HomeController@index')->name('home');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' => 'admin.'
], function () {
    Route::get('/index', 'IndexController@index')->name('admin'); //контроллер@метод
    Route::get('/test1', 'IndexController@test1')->name('test1');
    Route::get('/test2', 'IndexController@test2')->name('test2');
});

Route::group(
    [
        'prefix' => 'news',
        'as' => 'news.'
    ], function () {
    Route::get('/all', 'NewsController@news')->name('all');
    Route::get('/one/{id}', 'NewsController@newsOne')->name('One');
    Route::get('/categories', 'NewsController@categories')->name('categories');
    Route::get('/category/{id}', 'NewsController@categoryId')->name('categoryId');
    Route::get('/addNews', 'NewsController@addNews')->name('addNews');
}
);

Route::group(
    [
        'prefix' => 'auth',
        'as' => 'auth.'
    ], function () {
    Route::get('/register', 'AuthController@register')->name('register');
    Route::get('/login', 'AuthController@login')->name('login');
}
);


//Auth::routes();


