<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lichsumuacredit extends Model
{
    protected $table ="lichsumuacredit";
    public function nguoiChoi()
    {
        return $this->belongsTo('App\nguoichoi');
    }
    public function goiCredit()
    {
        return $this->belongsTo('App\goicredit');
    }
}
