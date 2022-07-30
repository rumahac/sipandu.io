<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $guard = 'user';

    protected $fillable = ['name', 'category_id', 'photo', 'description', 'language', 'age', 'education', 'residency', 'profession', 'city', 'address', 'phone', 'fax', 'email','f_url','g_url','t_url','l_url','password','title','details','is_featured','status','active','featured','web'];

    protected $hidden = [
        'password'
    ];  

    protected $remember_token = false;  


    public function category()
    {
    	return $this->belongsTo('App\Category');
    }
}
