<?php

Route::get('/', 'HomeController@index')->name('home');
Route::post('/send-message', 'ContactFormController@sendContactFormMessage')->name('send.contact');
