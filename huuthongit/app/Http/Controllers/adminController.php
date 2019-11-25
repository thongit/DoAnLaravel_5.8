<?php

namespace App\Http\Controllers;
use App\nguoichoi;
use App\linhvuc;
use App\cauhoi;
use App\goicredit;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        $danhSachNguoiChoi=nguoichoi::count();
        $danhSachLinhVuc=linhvuc::count();
        $danhSachCauHoi=cauhoi::count();
        $danhSachGoiCredit=goicredit::count();
            // $sapXepNguoiChoi=nguoichoi::where('created_at','>=',[request()->tu_ngay])->where('created_at','<=',[request()->den_ngay])->get();
            $sapXepNguoiChoi=nguoichoi::whereBetween('created_at',[request()->tu_ngay,request()->den_ngay])->get();
        
        return view('trangchu',compact('danhSachNguoiChoi','danhSachLinhVuc','danhSachCauHoi','danhSachGoiCredit','sapXepNguoiChoi'));
        // return view('ds-nguoichoi',compact('nguoichois'));
    }
    
}
