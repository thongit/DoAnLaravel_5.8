<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cauhoi;

class CauHoiAPI extends Controller
{
    public function layDanhSach($id) {
        $cauhois=cauhoi::where('linh_vuc_id',$id)->orderBy(DB::raw('RAND()'))->take(1)->get();
        $result=[
            'success'=>true,
            'data'=>$cauhois
    	];
    	return response()->json($result);
    }
}

