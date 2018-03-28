<?php

use App\Role;
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

    $user = User::find(1);

    $user->roles()->save(new Role(['name'=>'Author']));
    

});

Route::get('/read', function(){


    $user = User::findOrFail(1);

        //dd($user->roles);


    // foreach($user->roles as $role){
    //     dd($role);
    // }

    foreach($user->roles as $role){
        echo $role->name;
    }
});


Route::get('/update',function(){


    $user = User::findOrFail(1);

    if($user->has('roles')){

        foreach($user->roles as $role){

            if($role->name =='Author'){

                $role->name = "Author";

                $role->save();
            }    
        }
    }
});

Route::get('/delete',function(){

     $user = User::findOrFail(1);

    // $user->roles()->delete();
    foreach($user->roles as $role){

        $role->whereId(3)->delete();
    }

});


Route::get('/attach', function(){

    $user = User::findOrFail(1);

    $user->roles()->attach(5);


});

Route::get('/detach', function(){

    $user = User::findOrFail(1);

    $user->roles()->detach();


});

Route::get('/sync', function(){

    $user = User::findOrFail(1);

    $user->roles()->sync([1,5]);

});
