<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\cauhoi;
use App\linhvuc;
class cauhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cauHoi=cauhoi::all();
        $trash=DB::table('cauhoi')->whereNotNull('deleted_at')->get();
        return view('ds-cauhoi',['cauHoi'=>$cauHoi,'trash'=>$trash]);
    }
    public function getThem()
    {
        $linhvucs= linhvuc::all();
        return view('themoi-cauhoi',['linhvucs'=>$linhvucs]);
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'NoiDung'=>'required',
            'LinhVucID'=>'required',
            'A'=>'required',
            'B'=>'required',
            'C'=>'required',
            'D'=>'required',
            'DapAn'=>'required'
        ],[
            'NoiDung.required'=>'Bạn chưa nhập nội dung',
            'LinhVucID.required'=>'Bạn chưa chọn lĩnh vực',
            'A.required'=>'Bạn chưa nhập đáp án A',
            'B.required'=>'Bạn chưa nhập đáp án B',
            'C.required'=>'Bạn chưa nhập đáp án C',
            'D.required'=>'Bạn chưa nhập đáp án D',
            'DapAn.required'=>'Bạn chưa nhập đáp án Đúng'
        ]);
        $cauhois=new cauhoi;
        $cauhois->noi_dung=$request->NoiDung;
        $cauhois->linh_vuc_id=$request->LinhVucID;
        $cauhois->phuong_an_a=$request->A;
        $cauhois->phuong_an_b=$request->B;
        $cauhois->phuong_an_c=$request->C;
        $cauhois->phuong_an_d=$request->D;
        $cauhois->dap_an=$request->DapAn;
        $cauhois->save();
        return redirect('cauhoi/themmoi')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $linhvucs= linhvuc::all();
        $cauhoi=cauhoi::find($id);
        return view('sua-cauhoi',['cauhoi'=>$cauhoi,'linhvucs'=>$linhvucs]);
    }
    public function postSua(Request $request,$id)
    {  
        $cauhoi=cauhoi::find($id);
        $this->validate($request,
        [
            'NoiDung'=>'required',
            'LinhVucID'=>'required',
            'A'=>'required',
            'B'=>'required',
            'C'=>'required',
            'D'=>'required',
            'DapAn'=>'required'
        ],
        [   'NoiDung.required'=>'Bạn chưa nhập nội dung',
            'LinhVucID.required'=>'Bạn chưa chọn lĩnh vực',
            'A.required'=>'Bạn chưa nhập đáp án A',
            'B.required'=>'Bạn chưa nhập đáp án B',
            'C.required'=>'Bạn chưa nhập đáp án C',
            'D.required'=>'Bạn chưa nhập đáp án D',
            'DapAn.required'=>'Bạn chưa nhập đáp án Đúng'
        ]);
        $cauhoi->noi_dung=$request->NoiDung;
        $cauhoi->linh_vuc_id=$request->LinhVucID;
        $cauhoi->phuong_an_a=$request->A;
        $cauhoi->phuong_an_b=$request->B;
        $cauhoi->phuong_an_c=$request->C;
        $cauhoi->phuong_an_d=$request->D;
        $cauhoi->dap_an=$request->DapAn;
        $cauhoi->save();
        return redirect('cauhoi/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $cauhoi=cauhoi::find($id);
        $cauhoi->delete();
        return redirect('cauhoi/')->with('thongbao','Xóa thành công');
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
