<?php

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

//Route::get('/', function () {
//    $people=array(0=>"Ion",1=>"Leana",2=>"Vasile",3=>"Maria");
//    return view('pages.home',  compact('people'));
//});

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('home', 'PagesController@about');
