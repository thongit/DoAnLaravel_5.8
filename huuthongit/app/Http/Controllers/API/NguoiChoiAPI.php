<?php
namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\nguoichoi;
use Illuminate\Support\Facades\Storage;
class NguoiChoiAPI extends Controller
{
    public function layDanhSach(Request $request) {
    	$page = $request->query('page', 1);
    	$limit = $request->query('limit', 25);
    	$listNguoiChoi = nguoichoi::orderBy('diem_cao_nhat', 'desc')->skip(($page - 1) * $limit)->take($limit)->get();
    	return response()->json([
    		'total'	=> nguoichoi::count(),
    		'data'	=> $listNguoiChoi
    	]);
    }
}