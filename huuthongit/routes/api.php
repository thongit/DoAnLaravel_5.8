<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('nguoichoi','API\NguoiChoiAPI@layDanhSach');
Route::get('linhvuc','API\LinhVucAPI@layDanhSach');
Route::get('cauhoi/{id}','API\CauHoiAPI@layDanhSach');
Route::post('dangnhap','API\DangNhapAPI@dangNhapNguoiChoi');
Route::post('dangki','API\DangKiAPI@dangKiNguoiChoi');
Route::middleware(['assign.guard:api','jwt.auth'])->group(function()
{
    Route::get('laydanhsach','API\DangNhapAPI@layThongTin');
});
