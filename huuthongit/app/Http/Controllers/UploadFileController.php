<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public  function HienThiFormUpload()
    {
        return view('upload');
    }
    public function Upload(Request $request)
    {
        if($request->hasFile('tap_tin'))
        {
            // $request->validate(['tap_tin'=>'mimes:png,jpg,jpeg']);
            $files=$request->tap_tin;
             foreach($files as $file)
             {
                 $file->store('hinh_anh');

             }
             return "Upload thành công";   
        }
        return "upload thất bại";
    }
}
