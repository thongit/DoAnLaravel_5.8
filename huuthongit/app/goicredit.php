<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class goicredit extends Model
{
    protected $table ="goicredit";
    use SoftDeletes;
    public function lichSuMuaCredit()
    {
        return $this->hasMany('App\lichsumuacredit');
    }
}
