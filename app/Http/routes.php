<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
|
| POST      | login                   | auth::             | App\Http\Controllers\Auth\AuthController@login                  | web,guest  |
| GET|HEAD  | login                   | auth::             | App\Http\Controllers\Auth\AuthController@showLoginForm          | web,guest  |
| GET|HEAD  | logout                  | auth::             | App\Http\Controllers\Auth\AuthController@logout                 | web        |
| POST      | password/email          | auth::             | App\Http\Controllers\Auth\PasswordController@sendResetLinkEmail | web,guest  |
| POST      | password/reset          | auth::             | App\Http\Controllers\Auth\PasswordController@reset              | web,guest  |
| GET|HEAD  | password/reset/{token?} | auth::             | App\Http\Controllers\Auth\PasswordController@showResetForm      | web,guest  |
| POST      | register                | auth::             | App\Http\Controllers\Auth\AuthController@register               | web,guest  |
| GET|HEAD  | register                | auth::             | App\Http\Controllers\Auth\AuthController@showRegistrationForm   | web,guest  |
|
*/
Route::group([
    'middleware' => ['web'],
], function () {
    Route::auth();
    Route::get('register', function () {
        return abort(404);
    });
    Route::post('register', function () {
        return abort(404);
    });
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| GET|HEAD  | /                       | app::index         | App\Http\Controllers\PageController@index                       | web        |
| GET|HEAD  | news                    | app::news          | App\Http\Controllers\PageController@news                        | web        |
| GET|HEAD  | about                   | app::about         | App\Http\Controllers\PageController@about                       | web        |
| GET|HEAD  | faq                     | app::faq           | App\Http\Controllers\PageController@faq                         | web        |
|
*/
Route::group([
    'middleware' => ['web'],
    'as' => 'app::'
], function () {
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PageController@index'
    ]);
    Route::get('/news', [
        'as' => 'news',
        'uses' => 'PageController@news'
    ]);
    Route::get('/about', [
        'as' => 'about',
        'uses' => 'PageController@about'
    ]);
    Route::get('/faq', [
        'as' => 'faq',
        'uses' => 'PageController@faq'
    ]);
});

/*
|--------------------------------------------------------------------------
| Management Routes
|--------------------------------------------------------------------------
|
| GET|HEAD  | management/news         | admin::news.index  | App\Http\Controllers\Management\NewsController@index            | web,auth   |
| GET|HEAD  | management/news/create  | admin::news.create | App\Http\Controllers\Management\NewsController@create           | web,auth   |
| GET|HEAD  | management/news/edit    | admin::news.edit   | App\Http\Controllers\Management\NewsController@edit             | web,auth   |
| GET|HEAD  | management/data         | admin::data.index  | App\Http\Controllers\Management\DataController@index            | web,auth   |
| GET|HEAD  | management/data/create  | admin::data.create | App\Http\Controllers\Management\DataController@create           | web,auth   |
| GET|HEAD  | management/data/edit    | admin::data.edit   | App\Http\Controllers\Management\DataController@edit             | web,auth   |
| GET|HEAD  | management/faq          | admin::faq.index   | App\Http\Controllers\Management\FAQController@index             | web,auth   |
| GET|HEAD  | management/faq/create   | admin::faq.create  | App\Http\Controllers\Management\FAQController@create            | web,auth   |
| GET|HEAD  | management/faq/edit     | admin::faq.edit    | App\Http\Controllers\Management\FAQController@edit              | web,auth   |
|
*/
Route::group([
    'middleware' => ['web', 'auth'],
    'as' => 'admin::',
    'prefix' => 'management',
    'namespace' => 'Management',
], function () {
    Route::get('/news', [
        'as' => 'news.index',
        'uses' => 'NewsController@index'
    ]);
    Route::get('/news/create', [
        'as' => 'news.create',
        'uses' => 'NewsController@create'
    ]);
    Route::get('/news/edit', [
        'as' => 'news.edit',
        'uses' => 'NewsController@edit'
    ]);

    Route::get('/data', [
        'as' => 'data.index',
        'uses' => 'DataController@index'
    ]);
    Route::get('/data/create', [
        'as' => 'data.create',
        'uses' => 'DataController@create'
    ]);
    Route::get('/data/edit', [
        'as' => 'data.edit',
        'uses' => 'DataController@edit'
    ]);

    Route::get('/faq', [
        'as' => 'faq.index',
        'uses' => 'FAQController@index'
    ]);
    Route::get('/faq/create', [
        'as' => 'faq.create',
        'uses' => 'FAQController@create'
    ]);
    Route::get('/faq/edit', [
        'as' => 'faq.edit',
        'uses' => 'FAQController@edit'
    ]);
});


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| GET|HEAD  | api/news                | api::news.index    | App\Http\Controllers\API\NewsController@index                   | web,auth   |
| POST      | api/news                | api::news.store    | App\Http\Controllers\API\NewsController@store                   | web,auth   |
| DELETE    | api/news/{news}         | api::news.destroy  | App\Http\Controllers\API\NewsController@destroy                 | web,auth   |
| PUT|PATCH | api/news/{news}         | api::news.update   | App\Http\Controllers\API\NewsController@update                  | web,auth   |
| GET|HEAD  | api/news/{news}         | api::news.show     | App\Http\Controllers\API\NewsController@show                    | web,auth   |
| GET|HEAD  | api/data                | api::data.index    | App\Http\Controllers\API\DataController@index                   | web,auth   |
| POST      | api/data                | api::data.store    | App\Http\Controllers\API\DataController@store                   | web,auth   |
| GET|HEAD  | api/data/{data}         | api::data.show     | App\Http\Controllers\API\DataController@show                    | web,auth   |
| DELETE    | api/data/{data}         | api::data.destroy  | App\Http\Controllers\API\DataController@destroy                 | web,auth   |
| PUT|PATCH | api/data/{data}         | api::data.update   | App\Http\Controllers\API\DataController@update                  | web,auth   |
| POST      | api/faq                 | api::faq.store     | App\Http\Controllers\API\FAQController@store                    | web,auth   |
| GET|HEAD  | api/faq                 | api::faq.index     | App\Http\Controllers\API\FAQController@index                    | web,auth   |
| DELETE    | api/faq/{faq}           | api::faq.destroy   | App\Http\Controllers\API\FAQController@destroy                  | web,auth   |
| GET|HEAD  | api/faq/{faq}           | api::faq.show      | App\Http\Controllers\API\FAQController@show                     | web,auth   |
| PUT|PATCH | api/faq/{faq}           | api::faq.update    | App\Http\Controllers\API\FAQController@update                   | web,auth   |
|
*/
Route::group([
    'middleware' => ['web'],
    'as' => 'api::',
    'prefix' => 'api',
    'namespace' => 'API',
], function () {
    Route::resource('news', 'NewsController', [
        'only' => ['index', 'show'],
        'names' => [
            'index' => 'news.index',
            'show' => 'news.show',
        ]
    ]);

    Route::resource('data', 'DataController', [
        'only' => ['index', 'show'],
        'names' => [
            'index' => 'data.index',
            'show' => 'data.show',
        ]
    ]);

    Route::resource('faq', 'FAQController', [
        'only' => ['index', 'show'],
        'names' => [
            'index' => 'faq.index',
            'show' => 'faq.show',
        ]
    ]);
});
Route::group([
    'middleware' => ['web', 'auth'],
    'as' => 'api::',
    'prefix' => 'api',
    'namespace' => 'API',
], function () {
    Route::resource('news', 'NewsController', [
        'only' => ['store', 'update', 'destroy'],
        'names' => [
            'store' => 'news.store',
            'update' => 'news.update',
            'destroy' => 'news.destroy'
        ]
    ]);

    Route::resource('data', 'DataController', [
        'only' => ['store', 'update', 'destroy'],
        'names' => [
            'store' => 'data.store',
            'update' => 'data.update',
            'destroy' => 'data.destroy'
        ]
    ]);

    Route::resource('faq', 'FAQController', [
        'only' => ['store', 'update', 'destroy'],
        'names' => [
            'store' => 'faq.store',
            'update' => 'faq.update',
            'destroy' => 'faq.destroy'
        ]
    ]);
});
