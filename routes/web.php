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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('backend.dashboard');
// })->name('dashboard');

Route::middleware('auth')->group(function (){

	Route::get('/', 'HomeController@index')->name('home');

	Route::prefix('input-data')->group(function (){

		Route::get('/', 'Backend\InputDataController@index')->name('input-data');
		Route::post('insert-step-one', 'Backend\InputDataController@insert_step_one')->name('insert-step-one');
		Route::get('get-data-step-one', 'Backend\InputDataController@get_data_step_one')->name('get-data-step-one');
		Route::post('insert-step-three', 'Backend\InputDataController@insert_step_three')->name('insert-step-three');
		Route::get('get-data-step-three', 'Backend\InputDataController@get_data_step_three')->name('get-data-step-three');
		Route::post('insert-step-four', 'Backend\InputDataController@insert_step_four')->name('insert-step-four');

		Route::get('implementasi-evaluasi-unduh', 'Backend\InputDataController@print_pdf_step_three')->name('implementasi-evaluasi-unduh');

		Route::post('add', 'Backend\InputDataController@add')->name('add');
		Route::get('/hasil', 'Backend\InputDataController@hasil')->name('hasil');
		Route::get('/pass-hash', 'Backend\InputDataController@pass_hash')->name('pass-hash');

	});

	Route::prefix('history')->group(function (){
		Route::get('/', 'Backend\HistoryController@index')->name('history');
		Route::get('/get-datatable-history', 'Backend\HistoryController@datatableHistory')->name('get-datatable-history');
	});

});

Route::get('/login', 'Auth\LoginCustomController@index')->name('login');
Route::post('/login', 'Auth\LoginCustomController@proses_login')->name('login');
Route::get('/logout', 'Auth\LoginCustomController@logout')->name('logout')->middleware('auth');