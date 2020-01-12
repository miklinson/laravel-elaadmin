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
    Route::get('buttons', 'ComponentsController@buttons')->name('components.buttons');
    Route::get('badges', 'ComponentsController@badges')->name('components.badges');
    Route::get('tabs', 'ComponentsController@tabs')->name('components.tabs');
    Route::get('cards', 'ComponentsController@cards')->name('components.cards');
    Route::get('alerts', 'ComponentsController@alerts')->name('components.alerts');
    Route::get('progress-bars', 'ComponentsController@progressbars')->name('components.progress-bars');
    Route::get('modals', 'ComponentsController@modals')->name('components.modals');
    Route::get('switches', 'ComponentsController@switches')->name('components.switches');
    Route::get('grids', 'ComponentsController@grids')->name('components.grids');
    Route::get('typography', 'ComponentsController@typography')->name('components.typography');
});

Route::group(['prefix' => 'tables'], function () {
    Route::get('basic', 'TablesController@basic')->name('tables.basic');
    Route::get('data', 'TablesController@data')->name('tables.data');
});

Route::group(['prefix' => 'forms'], function () {
    Route::get('basic', 'FormsController@basic')->name('forms.basic');
    Route::get('advanced', 'FormsController@advanced')->name('forms.advanced');
});

Route::group(['prefix' => 'icons'], function () {
    Route::get('font-awesome', 'IconsController@fontAwesome')->name('icons.font-awesome');
    Route::get('advanced', 'IconsController@themefyIcons')->name('icons.themefy-icons');
});

Route::get('widgets', 'WidgetsController@index')->name('widgets');

Route::group(['prefix' => 'charts'], function () {
    Route::get('chart-js', 'ChartsController@chartJs')->name('charts.chart-js');
    Route::get('flot', 'ChartsController@flot')->name('charts.flot');
    Route::get('peity', 'ChartsController@peity')->name('charts.peity');
});

Route::group(['prefix' => 'maps'], function () {
    Route::get('google-map', 'MapsController@googleMap')->name('maps.google-map');
    Route::get('vector-map', 'MapsController@vectorMap')->name('maps.vector-map');
});
