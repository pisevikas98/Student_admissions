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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('about_us','HomeController@abotus');
Route::get('contact_us','HomeController@contact_us');

Route::get('examination','HomeController@examination');
Route::post('examinationsave','HomeController@examinationsave');
Route::get('examinationread','HomeController@examinationread');
Route::get('examinationedit/{rahul_id}','HomeController@examinationedit');
Route::post('examinationupdate/{rahul_id}','HomeController@examinationupdate');
Route::get('examinationdelete/{rahul_id}','HomeController@examinationdelete');
Route::get('examinationexport','HomeController@examinationexport');

Route::get('admission','HomeController@admission');
Route::get('admissionform','HomeController@admissionform');
Route::post('admissionformsave','HomeController@admissionformsave');
Route::get('admissionformread','HomeController@admissionformread');
Route::get('admissionformedit/{pise_id}','HomeController@admissionformedit');
Route::post('admissionformupdate/{pise_id}','HomeController@admissionformupdate');
Route::get('admissionformdelete/{pise_id}','HomeController@admissionformdelete');
Route::get('admissionformPdf','HomeController@admissionformPdf');
Route::get('admissionexport','HomeController@admissionexport');

Route::get('internationalform','internationalController@internationalform');
Route::post('internationalformsave','internationalController@internationalformsave');

Route::get('syllabus','HomeController@syllabus');

Route::get('scholarship','HomeController@scholarship');
Route::post('scholarshipsave','HomeController@scholarshipsave');
