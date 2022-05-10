<?php

use App\Http\Controllers\ContaktControllerc;
use Facade\FlareClient\Context\RequestContext;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact/submit', 'App\Http\Controllers\ContaktController@submit')->name('contact-form');

Route::get('/contact/all', 'App\Http\Controllers\ContaktController@allData')->name('contact-data');

Route::get('/contact/all/{id}', 'App\Http\Controllers\ContaktController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/update', 'App\Http\Controllers\ContaktController@updateMessage')->name('contact-update');
Route::get('/contact/all/{id}/delete', 'App\Http\Controllers\ContaktController@deleteMessage')->name('contact-delete');
Route::post('/contact/all/{id}/update', 'App\Http\Controllers\ContaktController@updateMessageSubmit')->name('contact-update-submit');
