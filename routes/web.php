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
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');

    $data = [
        'title'=>'FYP Evaluations Date',
        'content'=>'The date assign for the final evalutaion for the group CS_68 is 11 August, 2020, Do complete The testing phase for your project.'


    ];
    Mail::send('Mail.test', $data, function ($message) {
        
        $message->to('abdulrafey38@gmail.com', 'Abdul Rafey');
        $message->subject('FYP Evaluations');

        
    });

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
