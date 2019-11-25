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


Route::middleware('auth')->group(function(){
    Route::prefix('linhvuc')->group(function(){
        Route::name('linhvuc.')->group(function(){
            Route::get('/','linhvucController@index')->name('danhsach')->middleware('auth');
            Route::get('/themmoi', function () {
                return view('themmoi-linhvuc');
            })->name('themmoi');
            Route::post('/themmoi','linhvucController@postThem');
            
        });
    });
    Route::get('goicredit','goicreditController@index')->name('danhsachgoicredit');
    Route::get('cauhoi','cauhoiController@index')->name('danhsachcauhoi');
    //Route::get('lv','linhvucController@index');
    
    Route::get('linhvuc/sua/{id}','linhvucController@getSua');
    Route::post('linhvuc/sua/{id}','linhvucController@postSua');
    Route::get('linhvuc/xoa/{id}','linhvucController@destroy');
    Route::get('linhvuc/restore/{id}','linhvucController@restore');
    Route::get('linhvuc/xoadb/{id}','linhvucController@xoadb');
    Route::get('linhvuc/thungrac','linhvucController@thungrac')->name('thungraclinhvuc');
    
    Route::get('cauhoi/themmoi','cauhoiController@getThem')->name('themcauhoi');
    Route::post('cauhoi/themmoi','cauhoiController@postThem');
    Route::get('cauhoi/sua/{id}','cauhoiController@getSua');
    Route::post('cauhoi/sua/{id}','cauhoiController@postSua');
    Route::get('cauhoi/xoa/{id}','cauhoiController@getXoa');
    Route::get('cauhoi/restore/{id}','cauhoiController@restore');
    Route::get('cauhoi/xoadb/{id}','cauhoiController@xoadb');
    Route::get('cauhoi/thungrac','cauhoiController@thungrac')->name('thungraccauhoi');
    
    Route::get('goicredit/themmoi','goicreditController@getThem')->name('themgoicredit');
    Route::post('goicredit/themmoi','goicreditController@postThem');
    Route::get('goicredit/sua/{id}','goicreditController@getSua');
    Route::post('goicredit/sua/{id}','goicreditController@postSua');
    Route::get('goicredit/xoa/{id}','goicreditController@getXoa');
    Route::get('goicredit/restore/{id}','goicreditController@restore');
    Route::get('goicredit/xoadb/{id}','goicreditController@xoadb');
    Route::get('goicredit/thungrac','goicreditController@thungrac')->name('thungracgoicredit');
    
    Route::get('nguoichoi','nguoichoiController@index')->name('danhsachnguoichoi');
    Route::get('nguoichoi/themmoi','nguoichoiController@getThem')->name('themnguoichoi');
    Route::post('nguoichoi/themmoi','nguoichoiController@postThem');
    Route::get('nguoichoi/sua/{id}','nguoichoiController@getSua');
    Route::post('nguoichoi/sua/{id}','nguoichoiController@postSua');
    Route::get('nguoichoi/xoa/{id}','nguoichoiController@getXoa');

    Route::get('/', function () {
        return view('dangnhap');
    })->middleware("guest");
    Route::get('/admin','adminController@index')->name('dashboard');
    // Route::get('/admin', function () {
    //     return view('trangchu');
    // })->name('dashboard');
});


Route::get('/dangnhap','pagesController@getDangnhap')->name('dangnhap')->middleware("guest");
Route::get('/dangxuat','pagesController@getdangXuat')->name('dangxuat');
Route::post('/dangnhap','pagesController@postxulyDangNhap')->name('xulydangnhap');
Route::get('/test','pagesController@LayThongTin');
Route::get('/upload','UploadFileController@HienThiFormUpload');
Route::post('/upload','UploadFileController@Upload')->name("upload");





