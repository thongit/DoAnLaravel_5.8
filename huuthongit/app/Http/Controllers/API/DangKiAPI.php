<?php
namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nguoichoi;
use JWTFactory;
use JWTAuth;
use Validator;
use Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class DangKiAPI extends Controller
{
    public function dangKiNguoiChoi(Request $request)
    {
        // $this->validate($req,
        // [
        //     'ten_dang_nhap'=>'required|min:3|',
        //     'password'=>'required|min:6|',
        //     'repassword'=>'required|same:mat_khau|',
        //     'email'=>'required|email|unique:nguoichoi,email'

        // ],
        // ['ten_dang_nhap.required'=>'Bạn chưa nhập tên đăng nhập',
        //     'ten_dang_nhap.min'=>'Tên đăng nhập phải lớn hơn 3 kí tự',
        //     'password.required'=>'Bạn chưa nhập mật khẩu',
        //     'password.min'=>'Mật khẩu phải có ít nhất 6 kí tự',
        //     'repassword.required'=>'Bạn chưa nhập lại mật khẩu',
        //     'repassword.same'=>'Mật khẩu nhập lại không trùng',
        //     'email.required'=>'Bạn chưa nhập email',
        //     'email.email'=>'Sai định dạng email',
        //     'email.unique'=>'Email đã tồn tại',

        // ]);
        // $nguoichois= new nguoichoi;
        // $nguoichois->ten_dang_nhap= $request->ten_dang_nhap;
        // $nguoichois->mat_khau= Hash::make($request->password);
        // $nguoichois->email= $request->email;
        // //$nguoichois->hinh_dai_dien=$request->HinhDaiDien;
        // // $nguoichois->credit=$request->Credit;
        // // $nguoichois->diem_cao_nhat=$request->DiemCaoNhat;
        // return response()->json($nguoichois, Response::HTTP_OK);
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:nguoichoi,email',
            'ten_dang_nhap' => 'required|min:3|unique:nguoichoi,ten_dang_nhap',
            'password'=> 'required|min:6'
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors(),
                                    'status'=>false]);
        }
        $nguoichois= new nguoichoi;
        $nguoichois->ten_dang_nhap= $request->ten_dang_nhap;
        $nguoichois->mat_khau= Hash::make($request->password);
        $nguoichois->email= $request->email;
        $nguoichois->hinh_dai_dien='_';
        $nguoichois->credit='500';
        $nguoichois->diem_cao_nhat='0';
        $nguoichois->save();
        return response()->json([
            'status'=> true,
            'message'=>'Người chơi đã tạo thành công',
            'data'=>$nguoichois
        ]);
    }
}