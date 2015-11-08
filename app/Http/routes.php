<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
//Route::get('home', 'HomeController@index');

//HomeController
Route::get('/events', 'EventController@index');
Route::post('/events', 'EventController@store');
Route::get('/events/{events}', 'EventController@finishEvent');

Route::get('/', 'HomeController@index');
Route::get('/blog', 'HomeController@blog');
Route::get('/me', 'HomeController@me');
Route::get('/book', 'HomeController@book');
Route::get('/pictures', 'HomeController@pictures');
Route::get('/movie', 'HomeController@movie');
Route::get('/fitness', 'HomeController@fitness');
Route::get('/project', 'HomeController@project');
Route::get('/music', 'HomeController@music');

Route::get('/articles/{id}', 'ArticlesController@show');
Route::get('/pictures/{id}', 'PictureController@show');
Route::post('comment/store', 'CommentsController@store');

Route::controllers([
    'console/auth' => 'Auth\AuthController',

]);


Route::group(['prefix' => 'console', 'middleware' => 'auth'], function(){
    Route::any('/', 'console\HomeController@index');
    Route::resource('home', 'console\HomeController');
    Route::resource('blog', 'console\BlogController');
    Route::resource('user', 'console\UserController');
    Route::resource('article', 'console\ArticleController');
    Route::resource('article_type', 'console\ArticleTypeController');
    Route::resource('article_tag', 'console\ArticleTagController');
} );


Route::group(['prefix' => 'api/v1'], function(){

    Route::resource('pictures', 'api\PictureController', ['only' => ['index', 'show']]);

});

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

//Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
//{
//	Route::get('/', 'AdminHomeController@index');
//	Route::resource('articles', 'PagesController');
//	Route::resource('comments', 'CommentsController');
//});