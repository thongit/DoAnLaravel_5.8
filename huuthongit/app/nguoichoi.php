<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class nguoichoi extends Model
{
    protected $table ="nguoichoi";
    use SoftDeletes;
    public function lichSuMuaCredit()
    {
        return $this->hasMany('App\lichsumuacredit');
    }
    public function luotChoi()
    {
        return $this->hasMany('App\luotchoi');
    }
}
