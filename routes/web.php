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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'components'], function () {
    Route::get('buttons', 'ComponentController@buttons')->name('components.buttons');
    Route::get('badges', 'ComponentController@badges')->name('components.badges');
    Route::get('tabs', 'ComponentController@tabs')->name('components.tabs');
    Route::get('cards', 'ComponentController@cards')->name('components.cards');
    Route::get('alerts', 'ComponentController@alerts')->name('components.alerts');
    Route::get('progress-bars', 'ComponentController@progressbars')->name('components.progress-bars');
    Route::get('modals', 'ComponentController@modals')->name('components.modals');
    Route::get('switches', 'ComponentController@switches')->name('components.switches');
    Route::get('grids', 'ComponentController@grids')->name('components.grids');
    Route::get('typography', 'ComponentController@typography')->name('components.typography');
});

Route::group(['prefix' => 'tables'], function () {
    Route::get('basic', 'TableController@basic')->name('tables.basic');
    Route::get('data', 'TableController@data')->name('tables.data');
});
