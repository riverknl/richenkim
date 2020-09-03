<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');

// RSVP Routes
Route::post('/rsvp/check', 'RsvpController@check');
Route::get('/rsvp', 'RsvpController@index');
Route::post('/rsvp/opslaan', 'RsvpController@update');

// Pagina's
Route::get('/programma', 'PagesController@programma');
Route::get('/praktische-informatie', 'PagesController@praktischeInformatie');
Route::get('/cadeau-tips', 'PagesController@cadeauTips');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/pages', 'Admin\PageController@index')->name('pages');
Route::get('/dashboard/pages/create', 'Admin\PageController@create')->name('pages');
Route::get('/dashboard/pages/{id}', 'Admin\PageController@show')->name('pages');
Route::get('/dashboard/pages/edit/{id}', 'Admin\PageController@edit')->name('pages');

// Logged in Dashboard Routes

// Guests routes
Route::get('/dashboard/guests', 'GuestController@index');
Route::get('/dashboard/guests/create', 'GuestController@create');
Route::post('/dashboard/guests', 'GuestController@store');
Route::get('/dashboard/guests/{guest}', 'GuestController@show');
Route::put('/dashboard/guests/{guest}', 'GuestController@update');
Route::delete('/dashboard/guests/{guest{', 'GuestController@destroy');


//Programm routes
Route::get('/dashboard/program', 'ProgramController@index');
Route::get('/dashboard/program/create', 'ProgramController@create');
Route::post('/dashboard/program', 'ProgramController@store');
Route::get('/dashboard/program/{program}', 'ProgramController@show');
Route::put('/dashboard/program/{program}', 'ProgramController@update');
Route::delete('/dashboard/program/{program}', 'ProgramController@destroy');

Route::get('/destroySession', 'HomeController@destroySession');


Route::get('/test', 'TestController@index');
