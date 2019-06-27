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
Route::get('contact', 'PagesController@contact')->name('contact');

// // Paypal Payment Gateway
// Route::get('payment', 'PaymentController@index')->name('payment');
// // route for processing payment
// Route::post('paypal', 'PaymentController@payWithpaypal')->name('paypal');

Route::get('payment', 'PaymentController@index')->name('payment');
Route::post('checkout', 'PaymentController@createPayment')->name('create-payment');
Route::get('confirm', 'PaymentController@confirmPayment')->name('confirm-payment');


// route for check status of the payment
// Route::get('status', 'PaymentController@getPaymentStatus')->name('status');

// Send an email using smtp
Route::post('send', 'MailController@send')->name('send');


