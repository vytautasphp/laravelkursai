<?php

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
    //return view('welcome');

    $data = [

        'title' => 'Hi student I hope you like the course',
        'content' => 'This laravel course was created with alot of love....'


    ];


    Mail::send('emails.test', $data, function($message){


        $message->to('vytautas.sabutisb@gmail.com', 'Vytautas')->subject('Hello student how are you???');

    });













});
