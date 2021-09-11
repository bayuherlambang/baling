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

// Route::get('/', function () {
//     return view('formBA');
// });

Auth::routes();
//Auth::routes(['register' => false]);
//Route::get('/', 'BeritaAcaraController@create');
Route::group(['middleware' => 'auth'], function () {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('perubahanstatus', 'PerubahanStatusController');
  Route::resource('peminjamanuser', 'PeminjamanUserController');
  Route::resource('agent', 'AgentController');
  Route::resource('status', 'StatusController');
  Route::resource('users', 'UsersController');
  Route::resource('roles', 'RolesController');
  Route::resource('site', 'SiteController');
  Route::post('importExcel', 'AgentController@importExcel');

  Route::get('reportpeminjamanuser', 'PeminjamanUserController@report')->name('reportpeminjamanuser');
  Route::get('reportperubahanstatus', 'PerubahanStatusController@report')->name('reportperubahanstatus');

  Route::get('approvePeminjamanuser', 'PeminjamanUserController@approvePage')->name('approvePeminjamanuser');
  Route::get('setApprovePeminjamanuser/{id}', 'PeminjamanUserController@setApprove')->name('setApprovePeminjamanuser');
  Route::get('approvePerubahanstatus', 'PerubahanStatusController@approvePage')->name('approvePerubahanstatus');
  Route::put('setApprovePerubahanstatusSingleID/{id}', 'PerubahanStatusController@setApproveSingleID' )->name('setApprovePerubahanstatusSingleID');

  Route::post('perubahanstatusServerside', 'PerubahanStatusController@grab' )->name('perubahanstatusServerside');
  Route::put('perubahanstatusServersideApprove/{id}', 'PerubahanStatusController@setApprove' )->name('perubahanstatusServersideApprove');
  Route::post('perubahanstatusServersideApprove', 'PerubahanStatusController@Approve' )->name('perubahanstatusServersideApprove');
  Route::post('filterByDate', 'PerubahanStatusController@filterByDate' );
});
//Route::any('perubahanstatusServerside', 'PerubahanStatusController@grab' )->name('perubahanstatusServerside');
