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

 Route::get('/', function () {
     return view('auth.login');
 });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/details','Admin\AdminController@details')->name('admin.details');
// Route::get('/admin/register','Admin\AdminController@register')->name('admin.register');
Route::get('/admin/login','Auth\LoginController@login')->name('admin.login');
Route::get('/admin/profile','Admin\AdminController@profile')->name('admin.profile');
Route::get('/admin/dashboard','Admin\AdminController@dashboard')->name('admin.dashboard');
Route::match(['get','post'],'admin/details/update', 'Admin\AdminController@update')->name('admin.details.update');
Route::get('admin/logout', 'Admin\AdminController@logout')->name('admin.logout');
Route::get('language_switch/{locale}', 'LanguageController@switchLanguage');
//category Controller
Route::get('category/index', 'CategoryController@index')->name('category.index');
Route::match(['get','post'],'Category/insert', 'CategoryController@insert')->name('category.insert');
Route::post('category/import', 'CategoryController@import')->name('category.import');
Route::post('category/deletebyselection', 'CategoryController@deleteBySelection');
Route::post('category/category-data', 'CategoryController@categoryData');
Route::resource('category', 'CategoryController');


//Brand Controller
Route::get('brand/index', 'BrandController@index')->name('brand.index');
Route::match(['get','post'],'brand/insert', 'BrandController@insert')->name('brand.insert');
Route::post('brand/import', 'BrandController@import')->name('brand.import');
Route::post('brand/deletebyselection', 'BrandController@deleteBySelection');
Route::post('brand/brand-data', 'BrandController@brandData');
Route::resource('brand', 'BrandController');



  Route::get('setting/general_setting', 'SettingController@generalSetting')->name('setting.general');
	Route::post('setting/general_setting_store', 'SettingController@generalSettingStore')->name('setting.generalStore');
	Route::get('setting/general_setting/change-theme/{theme}', 'SettingController@changeTheme');
	Route::get('setting/mail_setting', 'SettingController@mailSetting')->name('setting.mail');
	Route::get('setting/sms_setting', 'SettingController@smsSetting')->name('setting.sms');
	Route::get('setting/createsms', 'SettingController@createSms')->name('setting.createSms');
	Route::post('setting/sendsms', 'SettingController@sendSms')->name('setting.sendSms');
	Route::get('setting/hrm_setting', 'SettingController@hrmSetting')->name('setting.hrm');
	Route::post('setting/hrm_setting_store', 'SettingController@hrmSettingStore')->name('setting.hrmStore');
	Route::post('setting/mail_setting_store', 'SettingController@mailSettingStore')->name('setting.mailStore');
	Route::post('setting/sms_setting_store', 'SettingController@smsSettingStore')->name('setting.smsStore');
	Route::get('setting/pos_setting', 'SettingController@posSetting')->name('setting.pos');
	Route::post('setting/pos_setting_store', 'SettingController@posSettingStore')->name('setting.posStore');
	Route::get('setting/empty-database', 'SettingController@emptyDatabase')->name('setting.emptyDatabase');

//tax
	// Route::post('importtax', 'TaxController@importTax')->name('tax.import');
	// Route::post('tax/deletebyselection', 'TaxController@deleteBySelection');
	// Route::get('tax/lims_tax_search', 'TaxController@limsTaxSearch')->name('tax.search');
	// Route::resource('tax', 'TaxController');
	  Route::get('tax/index', 'TaxController@index')->name('tax.index');
    Route::match(['get','post'],'tax/insert', 'TaxController@insert')->name('tax.insert');
    Route::post('tax/import', 'TaxController@import')->name('tax.import');
    Route::post('tax/deletebyselection', 'TaxController@deleteBySelection');
    Route::post('tax/tax-data', 'TaxController@taxData');
    Route::get('tax/downloadPDF','TaxController@downloadPDF');
    Route::get('tax/export', 'TaxController@export')->name('tax.export');
    Route::resource('tax', 'TaxController');
    Route::match(['get','post'],'tax/edit/{id}', 'TaxController@update')->name('tax.update');
    Route::get('tax/update-status/{id}/{status}', 'TaxController@updateStatus');
    Route::match(['get','post'],'/delete-tax/{id}', 'TaxController@delete')->name('tax.delete-tax');
    Route::get('tax/invoice/{id}', 'TaxController@invoice')->name('tax.invoice');




//Bank details

    Route::get('bank/index', 'ContractController@index')->name('bank.index');
    Route::get('bank/details', 'ContractController@show')->name('bank.show.details');
    Route::match(['get','post'],'bank/insert', 'ContractController@insert')->name('bank.insert');
    Route::post('bank/import', 'ContractController@import')->name('bank.import');
    Route::post('bank/deletebyselection', 'ContractController@deleteBySelection');
    Route::post('bank/bank-data', 'ContractController@bankData');
    Route::get('bank/downloadPDF','ContractController@downloadPDF');
    Route::get('bank/export', 'ContractController@export')->name('bank.export');
    Route::resource('bank', 'ContractController');
    Route::match(['get','post'],'bank/edit/{id}', 'ContractController@update')->name('bank.update');
    Route::get('bank/update-status/{id}/{status}', 'ContractController@updateStatus');
    Route::match(['get','post'],'/delete-bank/{id}', 'ContractController@delete')->name('bank.delete-bank');


//task Controller
    Route::get('task/index', 'TaskController@index')->name('task.index');
    Route::match(['get','post'],'task/insert', 'TaskController@insert')->name('task.insert');
    Route::post('task/import', 'TaskController@import')->name('task.import');
    Route::post('task/deletebyselection', 'TaskController@deleteBySelection');
    Route::post('task/task-data', 'TaskController@taskData');
    Route::get('task/downloadPDF','TaskController@downloadPDF');
    Route::get('task/export', 'TaskController@export')->name('task.export');
    Route::resource('task', 'TaskController');
    Route::match(['get','post'],'task/edit/{id}', 'TaskController@update')->name('task.update');
    Route::get('task/update-status/{id}/{status}', 'TaskController@updateStatus');
    Route::match(['get','post'],'/delete-task/{id}', 'TaskController@delete')->name('task.delete-task');



//update Order status

// Route::post('/admin/sendtask', 'TaskController@sendtask')->name('admin.sendtask');
   Route::get('/admin/edit_task/{id}', 'TaskController@editTask')->name('admin.editTask');
   Route::match(['get','post'],'/admin/edit-task/{id}', 'TaskController@update')->name('admin.update');


   Route::get('/sendemail', 'SendEmailController@index');
   Route::post('/sendemail/send', 'SendEmailController@send');