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