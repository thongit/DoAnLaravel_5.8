<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\linhvuc;
class linhvucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function layDanhSach(Request $request) {
        $linhvucs=linhvuc::all()->random(5);
        $result=[
            'success'	=>true,
            'data'=>$linhvucs
    	];
    	return response()->json($result);
    }
    public function index()
    {
        $linhvucs=linhvuc::all();
        $trash=DB::table('linhvuc')->whereNotNull('deleted_at')->get();
        return view('ds-linhvuc',['linhvucs'=>$linhvucs,'trash'=>$trash]);
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'Ten'=>'required|min:3|max:100'
        ],
        ['Ten.required'=>'Bạn chưa nhập tên lĩnh vực',
            'Ten.min'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Ten.max'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự'

        ]);
        $linhvucs= new linhvuc;
        $linhvucs->ten_linh_vuc= $request->Ten;
        $linhvucs->save();
        return redirect('linhvuc/themmoi')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $linhvuc=linhvuc::find($id);
        return view('sua-linhvuc',['linhvuc'=>$linhvuc]);
    }
    public function postSua(Request $request,$id)
    {
        $linhvuc=linhvuc::find($id);
        $this->validate($request,
        [
            'Ten'=>'required|min:3|max:100'
        ],
        ['Ten.required'=>'Bạn chưa nhập tên lĩnh vực',
            'Ten.min'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Ten.max'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự'
        ]);
        $linhvuc->ten_linh_vuc= $request->Ten;
        $linhvuc->save();
        return redirect('linhvuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function destroy($id)
    {
        $linhvucs=linhvuc::find($id);
        $linhvucs->delete();
        return redirect('linhvuc');
    }
    public function thungrac()
    {
        $linhvucs=linhvuc::onlyTrashed()->get();
        return view('thungrac-linhvuc',['linhvucs'=>$linhvucs]);
    }
    public function restore($id)
    {
        $linhvucs=linhvuc::withTrashed()->find($id);
        $linhvucs->restore();
        return redirect('linhvuc');
    }
    public function xoadb($id)
    {
        $linhvucs=linhvuc::withTrashed()->find($id);
        $linhvucs->forceDelete();
        return redirect('linhvuc/thungrac');
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
    // public function destroy($id)
    // {
    //     //
    // }
}
