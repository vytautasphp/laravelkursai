<?php

use App\Article;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 


Route::post('register', 'Auth\RegisterController@register');

 Route::middleware('auth:api')->group(function(){


    Route::get('/user', function (Request $request) {

        //     //dd($request);
             return $request->user();
         });


     Route::get('articles', 'ArticleController@index');
     Route::get('articles/{article}', 'ArticleController@show');
     



     Route::post('articles', 'ArticleController@store');
     Route::put('articles/{article}', 'ArticleController@update');
     Route::delete('articles/{article}', 'ArticleController@delete');
    


 });

//Jxp2BiYKvIcfJQiwXY6QmRv7YRNl9BXRXR4ZmeX5LCgcltfdSOXF4YRt6tac

