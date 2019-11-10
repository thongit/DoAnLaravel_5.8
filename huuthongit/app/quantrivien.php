<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class quantrivien extends Authenticatable
{
    	
    protected $table ="quantrivien";
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
    
}
