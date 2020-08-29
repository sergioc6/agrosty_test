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

Route::get('mails/group', 'MailController@listGroup')->name('mails.list-group');
Route::get('mails/{mailId}/send', 'MailController@sendEmail')->where('mailId', '[0-9]+')->name('mails.send');
Route::get('mails/excel', 'MailController@getExcel')->name('mails.excel');
Route::get('mails/pdf', 'MailController@getPdf')->name('mails.pdf');

Route::resource('mails', 'MailController');
