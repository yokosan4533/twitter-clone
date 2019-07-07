<?php

Route::get('hello',function(){
   return view('');
});

Route::get('/','StaticPages@home');

Route::get('home','StaticPages@home');

Route::get('about','StaticPages@about');

Route::get('help','StaticPages@help');

Route::get('contact','StaticPages@contact');
