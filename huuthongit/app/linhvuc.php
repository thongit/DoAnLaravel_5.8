<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class linhvuc extends Model
{
    protected $table ="linhvuc";
    use SoftDeletes;
    public function cauHoi()
    {
        return $this->hasMany('App\cauhoi');
    }
}
