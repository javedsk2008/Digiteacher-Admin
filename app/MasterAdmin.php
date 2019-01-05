<?php

namespace App;
use Hash;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Auth\Authenticatable;

class MasterAdmin extends Model implements AuthenticatableContract
{
    use Authenticatable, Authorizable;
    
    // protected $collection = 'master_admin';
    protected $guard = 'admin';
    protected $table = 'master_admin';
     public $timestamps = true;
    protected $fillable = [
        'id', 'name', 'email','password'
    ];
	
	const ADMIN_EMAIL = 'admin@grow.com';
	//const ADMIN_EMAIL = 'snse.shruti@gmail.com';


     public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

}
