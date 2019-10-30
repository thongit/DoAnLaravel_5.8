<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\goicredit;
class goicreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goiCredits=goicredit::all();
        $trash=DB::table('goicredit')->whereNotNull('deleted_at')->get();
        return view('ds-goicredit',['goiCredits'=>$goiCredits,'trash'=>$trash]);
    }
    public function getThem()
    {
        return view('themmoi-goicredit');
    }
    public function postThem(Request $request)
    {
        $this->validate($request,
        [
            'TenGoi'=>'required|min:3|max:100',
            'Credit'=>'required',
            'SoTien'=>'required'
        ],
        ['TenGoi.required'=>'Bạn chưa nhập tên lĩnh vực',
            'Ten.min'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Ten.max'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Credit.required'=>'Bạn chưa nhập tên lĩnh vực',
            'SoTien.required'=>'Bạn chưa nhập tên lĩnh vực',

        ]);
        $goiCredits= new goicredit;
        $goiCredits->ten_goi= $request->TenGoi;
        $goiCredits->credit= $request->Credit;
        $goiCredits->so_tien= $request->SoTien;
        $goiCredits->save();
        return redirect('goicredit/themmoi')->with('thongbao','Thêm thành công');
    }
    public function getSua($id)
    {
        $goiCredits=goicredit::find($id);
        return view('sua-goicredit',['goiCredits'=>$goiCredits]);
    }
    public function postSua(Request $request,$id)
    {
        $goiCredits=goicredit::find($id);
        $this->validate($request,
        [
            'TenGoi'=>'required|min:3|max:100',
            'Credit'=>'required',
            'SoTien'=>'required'
        ],
        ['TenGoi.required'=>'Bạn chưa nhập tên lĩnh vực',
            'Ten.min'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Ten.max'=>'Tên lĩnh vực phải dài từ 3 đến 100 kí tự',
            'Credit.required'=>'Bạn chưa nhập tên lĩnh vực',
            'SoTien.required'=>'Bạn chưa nhập tên lĩnh vực',

        ]);
        $goiCredits->ten_goi= $request->TenGoi;
        $goiCredits->credit= $request->Credit;
        $goiCredits->so_tien= $request->SoTien;
        $goiCredits->save();
        return redirect('goicredit/sua/'.$id)->with('thongbao','Sửa thành công');
    }
    public function getXoa($id)
    {
        $goiCredits=goicredit::find($id);
        $goiCredits->delete();
        return redirect('goicredit/')->with('thongbao','Xóa thành công');
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
