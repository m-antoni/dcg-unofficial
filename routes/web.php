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
Route::get('about', 'PagesController@about')->name('about');
Route::get('corporate', 'PagesController@corporate')->name('corporate');
Route::get('clients', 'PagesController@clients')->name('clients');
Route::get('feed', 'PagesController@feed')->name('feed');
Route::get('payment', 'PagesController@payment')->name('payment');
Route::get('contact', 'PagesController@contact')->name('contact');

// Send an email using smtp
Route::post('send', 'MailController@send')->name('send');
// Route::get('/email', 'MailController@email');