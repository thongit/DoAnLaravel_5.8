<?php
namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
class nguoichoi extends Authenticatable implements JWTSubject
{
    protected $table ="nguoichoi";
    protected $hidden=['mat_khau'];
    use SoftDeletes;
    public function getPasswordAttribute()
    {
        return $this->mat_khau;
    }
    public function getJWTIdentifier()
    {
      return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
      return [];
    }
    public function lichSuMuaCredit()
    {
        return $this->hasMany('App\lichsumuacredit');
    }
    // public function luotChoi()
    // {
    //     return $this->hasMany('App\luotchoi');
    // }
   
}