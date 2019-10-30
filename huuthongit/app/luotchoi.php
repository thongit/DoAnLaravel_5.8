<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class luotchoi extends Model
{
    protected $table ="luotchoi";
    public function nguoiChoi()
    {
        return $this->belongsTo('App\nguoichoi');
    }
    public function chiTietLuotChoi()
    {
        return $this->hasMany('App\chitietluotchoi');
    }
}
