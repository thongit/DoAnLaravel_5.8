<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\quantrivien;
use App\Providers;
use Illuminate\Support\Facades\DB;
use Alert;

class pagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function getDangnhap()
    {
        return view('dangnhap');
    }
    public function postxulyDangNhap(Request $request)
    {
       
        $thongtin=$request->only(['ten_dang_nhap','mat_khau']);
        $qtv=quantrivien::where('ten_dang_nhap',$thongtin['ten_dang_nhap'])->first();
       
        if($qtv ==null)
        {
            
            return redirect('dangnhap')->with('error', ('Tên tài khoản không tồn tại,vui lòng nhập lại!'));
        }
        if(!Hash::check($thongtin['mat_khau'],$qtv->mat_khau))
        {
            return redirect('dangnhap')->with('error', ('Mật khẩu không đúng, vui lòng nhập lại!'));
        }
        Auth::login($qtv);
        return redirect()->route('dashboard');
    }
     public function getdangXuat()
    {
         Auth::logout();
        return redirect()->route('dangnhap');
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
