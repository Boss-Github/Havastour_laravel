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





Route::match(['get', 'post'], '/',"IndexController@index")->name('index');
Route::match(['get', 'post'], '/contact',"IndexController@contact")->name('contact');
Route::get('/faq',"IndexController@faq")->name('faq');
Route::get('/about',"IndexController@about")->name('about');
Route::get('/tour',"IndexController@tour")->name('tour');
Route::get('/txbs',"IndexController@txbs")->name('txbs');
Route::get('/swb',"IndexController@swb")->name('swb');
Route::get('/bst',"IndexController@bst")->name('bst');
Route::get('/navruz',"IndexController@navruz")->name('navruz');
Route::get('/kumushkon',"IndexController@kumushkon")->name('kumushkon');
Route::get('/tour_remes',"IndexController@tour_remes")->name('tour_remes');
Route::get('/tour_gurman',"IndexController@tour_gurman")->name('tour_gurman');
Route::get('/tour_camel',"IndexController@tour_camel")->name('tour_camel');
Route::get('/tour_palomnik',"IndexController@tour_palomnik")->name('tour_palomnik');
Route::get('/tour_for',"IndexController@tour_for")->name('tour_for');
Route::get('/tour_school',"IndexController@tour_school")->name('tour_school');
Route::get('/tour_health',"IndexController@tour_health")->name('tour_health');
Route::get('/tour_family',"IndexController@tour_family")->name('tour_family');
Route::get('/tour_horse',"IndexController@tour_horse")->name('tour_horse');
Route::get('/tour_bus',"IndexController@tour_bus")->name('tour_bus');
Route::get('/tour_samarqand',"IndexController@tour_samarqand")->name('tour_samarqand');
Route::get('/tour_buxara',"IndexController@tour_buxara")->name('tour_buxara');


Route::get('/tashkent',"IndexController@tashkent")->name('tashkent');
Route::get('/samarqand',"IndexController@samarqand")->name('samarqand');
Route::get('/shaxrisabz',"IndexController@shaxrisabz")->name('shaxrisabz');
Route::get('/buxara',"IndexController@buxara")->name('buxara');
Route::get('/xiva',"IndexController@xiva")->name('xiva');
Route::get('/urgench',"IndexController@urgench")->name('urgench');
Route::get('/nukus',"IndexController@nukus")->name('nukus');
Route::get('/termez',"IndexController@termez")->name('termez');
Route::get('/andijan',"IndexController@andijan")->name('andijan');
Route::get('/qoqand',"IndexController@qoqand")->name('qoqand');
Route::get('/fergana',"IndexController@fergana")->name('fergana');


Route::get('/city_tashkent',"IndexController@city_tashkent")->name('city_tashkent');
Route::get('/city_samarqand',"IndexController@city_samarqand")->name('city_samarqand');
Route::get('/city_shaxrisabz',"IndexController@city_shaxrisabz")->name('city_shaxrisabz');
Route::get('/city_nurata',"IndexController@city_nurata")->name('city_nurata');
Route::get('/city_buxara',"IndexController@city_buxara")->name('city_buxara');
Route::get('/city_xiva',"IndexController@city_xiva")->name('city_xiva');
Route::get('/city_toprak',"IndexController@city_toprak")->name('city_toprak');
Route::get('/city_nukus',"IndexController@city_nukus")->name('city_nukus');
Route::get('/city_termez',"IndexController@city_termez")->name('city_termez');
Route::get('/city_fergana',"IndexController@city_fergana")->name('city_fergana');


Route::get('/uzbekistan',"IndexController@uzbekistan")->name('uzbekistan');
Route::get('/story_uzb',"IndexController@story_uzb")->name('story_uzb');
Route::get('/greate_path',"IndexController@greate_path")->name('greate_path');
Route::get('/uzbek_cuisine',"IndexController@uzbek_cuisine")->name('uzbek_cuisine');
Route::get('/craft',"IndexController@craft")->name('craft');
Route::get('/tradition',"IndexController@tradition")->name('tradition');
Route::get('/uzbek_clothes',"IndexController@uzbek_clothes")->name('uzbek_clothes');
Route::get('/holiday',"IndexController@holiday")->name('holiday');

Route::get('/addtocart/{id}',"IndexController@addtocart")->name('addtocart');
Route::get('remove/{rowId}', 'IndexController@remove')->name('remove');
Route::get('plus/{rowId}/{qty}', 'IndexController@plus')->name('plus');
Route::get('minus/{rowId}/{qty}', 'IndexController@minus')->name('minus');

Route::match(['get', 'post'], '/cart',"IndexController@cart")->name('cart');