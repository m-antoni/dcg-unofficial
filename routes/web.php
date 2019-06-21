<?php

/*
|--------------------------------------------------------------------------
| Project Heirarchy by Michael Antoni
|--------------------------------------------------------------------------

19-06-14: initial commit of the project


*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('homepage');
Route::get('payment', 'PagesController@payment')->name('payment');

Route::post('/send', 'MailController@send')->name('send');
// Route::get('/email', 'MailController@email');