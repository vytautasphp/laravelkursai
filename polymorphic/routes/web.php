<?php

use App\Photo;
use App\Staff;

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

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/create', function(){

    $staff = Staff::find(1);

    $staff->photos()->create(['path'=>'example.jpg']); //staffui sukuriam nuotrauka

});

Route::get('/read', function(){

    $staff = Staff::findOrFail(1);
    foreach($staff->photos as $photo){
        return $photo->path;
    }
});

Route::get('/update', function(){


    $staff = Staff::findOrfail(1);

    $photo = $staff->photos()->whereId(1)->first();

    $photo->path = "Update example.jpg";

    $photo->save();


});

Route::get('/delete', function(){


    $staff = Staff::findOrFail(1);

    $staff->photos()->whereId(1)->delete();

});


Route::get('/assign', function(){

    $staff = Staff::findOrFail(1);

    $photo = Photo::findOrFail(3);

    $staff->photos()->save($photo);
    

});

Route::get('un-assign', function(){

    $staff = Staff::findOrFail(1);

    $staff->photos()->whereId(3)->update(['imageable_id'=>'0', 'imageable_type'=>'0']);

});