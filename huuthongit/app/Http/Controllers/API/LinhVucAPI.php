<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\linhvuc;

class LinhVucAPI extends Controller
{
    public function layDanhSach() {
        $linhvucs=linhvuc::all()->random(5);
        $result=[
            'success'	=>true,
            'data'=>$linhvucs
    	];
    	return response()->json($result);
    }
}
