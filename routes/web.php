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
    return view('site.home');
});


//upload of file
/*Route::get('/upload',function(){
    return view('site.upload');
});*/



Auth::routes();


Route::group(['prefix'=>'arquivo'],function(){

    Route::get('uploadView','UploadController@index')->name('uploadView');
    Route::post('upload','UploadController@upload')->name('upload');

});
//Route::get('/upload', 'UploadController@index')->name('upload');
Route::get('/home', 'HomeController@index')->name('home');
