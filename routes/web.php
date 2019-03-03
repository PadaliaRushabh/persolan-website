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

Route::get('/', function () {

    $copywriteYear = date("Y");
    
    $homeContent = file_get_contents(resource_path() . '/content/home.json');
    $homeContent = json_decode($homeContent, true);
    
    return view('main', compact('copywriteYear', "homeContent"));
});
