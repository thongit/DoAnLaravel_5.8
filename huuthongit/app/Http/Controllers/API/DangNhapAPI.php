<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\nguoichoi;

class DangNhapAPI extends Controller
{
    public function dangNhapNguoiChoi(Request $req) {
        
        $credentials =[
        'ten_dang_nhap'=>$req->ten_dang_nhap,
        'password'=>$req->mat_khau
        ];
        if(!$token=auth('api')->attempt($credentials))
        {
            return response()->json([
                'status'=>false,
                'mess'=>'Sai tên hoặc mật khẩu,vui lòng thử lại!'
            ]);
            
        }
        return response()->json([
            'status'=>true,
            'mess'=>'Đăng nhập thành công',
            'token'=>$token,
            'type'=>'bearer',
            'expires'=>auth('api')->factory()->getTTL()*60
            ],200);
        
    }
    public function layThongTin()
    {
        return auth('api')->user();
    }
}
