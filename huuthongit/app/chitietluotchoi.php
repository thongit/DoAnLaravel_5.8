<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietluotchoi extends Model
{
    protected $table ="chitietluotchoi";
    public function cauHoi()
    {
        return $this->belongsTo('App\cauhoi');
    }
    public function luotChoi()
    {
        return $this->belongsTo('App\luotchoi');
    }
}
