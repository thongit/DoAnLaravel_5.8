<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class quantrivien extends Authenticatable
{
    use SoftDeletes;
    protected $table ="quantrivien";
}
