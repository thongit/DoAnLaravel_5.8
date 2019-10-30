<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\nguoichoi;
use Illuminate\Support\Facades\Storage;
class nguoichoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function layDanhSach(Request $request) {
    	$page = $request->query('page', 1);
    	$limit = $request->query('limit', 25);

    	$listNguoiChoi = nguoichoi::orderBy('diem_cao_nhat', 'desc')->skip(($page - 1) * $limit)->take($limit)->get();

    	return response()->json([
    		'total'	=> nguoichoi::count(),
    		'data'	=> $listNguoiChoi
    	]);
    }
    public function index()
    {
        $nguoichois=DB::table('nguoichoi')->get();
        return view('ds-nguoichoi',compact('nguoichois'));
    }
    public function getThem()
    {
        return view('themmoi-nguoichoi');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'TenDangNhap'=>'required|min:3|',
            'MatKhau'=>'required|min:6|',
            'NhapLaiMatKhau'=>'required|same:MatKhau|',
            'Email'=>'required|email|unique:nguoichoi,email'

        ],
        ['TenDangNhap.required'=>'Bạn chưa nhập tên đăng nhập',
            'Ten.min'=>'Tên đăng nhập phải lớn hơn 3 kí tự',
            'MatKhau.required'=>'Bạn chưa nhập mật khẩu',
            'MatKhau.min'=>'Mật khẩu phải có ít nhất 6 kí tự',
            'NhapLaiMatKhau.required'=>'Bạn chưa nhập lại mật khẩu',
            'NhaplaiMatKhau.same'=>'Mật khẩu nhập lại không trùng',
            'Email.required'=>'Bạn chưa nhập email',
            'Email.email'=>'Sai định dạng email',
            'Email.unique'=>'Email đã tồn tại',

        ]);
        $nguoichois= new nguoichoi;
        $nguoichois->ten_dang_nhap= $request->TenDangNhap;
        $nguoichois->mat_khau= bcrypt($request->MatKhau);
        $nguoichois->email= $request->Email;
        //$nguoichois->hinh_dai_dien=$request->HinhDaiDien;
        $nguoichois->credit=$request->Credit;
        $nguoichois->diem_cao_nhat=$request->DiemCaoNhat;
        if($request->has('HinhDaiDien'))
        {
            $file= $request->file('HinhDaiDien');
            $duoi=$file->getClientOriginalExtension();
            if($duoi!='jpg'  & $duoi!='png' & $duoi!='jpeg')
            {
                return redirect('nguoichoi/themmoi')->with('thongbao','Bạn chỉ được chọn file có đuôi jpg,png,jpeg');
                $name=$file->getClientOriginalName();
                $hinh=str_ramdom(4).'_'.$name;
                while(file_exists("assets/images/".$hinh))
                {
                    $hinh=str_ramdom(4).'_'.$name;
                }
                $file->move('assets/images/'.$hinh);
                $nguoichois->hinh_dai_dien=$hinh;
            }
            else
            {
                $nguoichois->hinh_dai_dien="_";
            }
        }
        $nguoichois->save();
        return redirect('nguoichoi/themmoi')->with('thongbao','Thêm thành công');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
