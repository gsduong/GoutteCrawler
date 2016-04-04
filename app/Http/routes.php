<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crawler', function() {
  $crawler = Goutte::request('GET', 'http://duckduckgo.com/?q=Laravel');
  $url = $crawler->filter('.result__title > a')->first()->attr('href');
  var_dump($url);
  return view('welcome');
});
