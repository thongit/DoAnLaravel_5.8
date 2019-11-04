<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
class cauhoi extends Model
{
    protected $table ="cauhoi";
    
    public function LinhVuc()
    {
        return $this->belongsTo('App\linhvuc');
    }
    public function chiTietLuotChoi()
    {
        return $this->hasMany('App\chitietluotchoi');
    }
    use SoftDeletes;
}
