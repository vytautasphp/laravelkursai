<?php
use App\User;
use App\Address;
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

Route::get('/insertuser',function(){


    $user = new User(['name'=>'Antanas', 'email'=>'antanas@email.com', 'password'=>12345]);
    
    $user->save();

    return "saved";

 
});

Route::get('/insert',function(){

    $user = User::findOrFail(1);

    $address = new Address(['name'=>'1234 Texas av NY NY 11123']);
    
    $user->address()->save($address);
});


Route::get('update',function(){

    $address = Address::whereUserId(1)->first(); //grazina objecta

    $address->name = "454224 Updated Av, aldaska";

    $address->save();
});

Route::get('/read',function(){

    $user = User::findOrFail(1);

   echo $user->address->name;
});

Route::get('/delete',function(){

    $user = User::findOrFail(1);

    $user->address()->delete();
});
