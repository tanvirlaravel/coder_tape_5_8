<?php

Route::view('/', 'home');
Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');
Route::view('about', 'about');

Route::resource('customers', 'CustomerController');
