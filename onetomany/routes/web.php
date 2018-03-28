<?php

use App\Post;
use App\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function(){

    $user = User::findOrFail(1);

    //$post = new Post(['title'=>'My first post', 'body'=>'djaksdjasjdklas']);

    $user->posts()->save(new Post(['title'=>'My second post 2', 'body'=>'djaksdjasjdklas2']));

});

Route::get('/read', function(){

    $user = User::findOrFail(1);

   foreach($user->posts as $post){

    echo $post->title ."<br>";
   }
});

Route::get('/update', function(){

    $user = User::findOrFail(1);

    $user->posts()->where('id','=',2)->update(['title'=>'i love laravel 2','body'=>'sasdhhasjdhjhdfjdasv 2']);
});

Route::get('/delete',function(){

    $user = User::findOrFail(1);

    $user->posts()->whereId(1)->delete();

});