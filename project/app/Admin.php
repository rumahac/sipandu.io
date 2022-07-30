<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'username', 'email', 'phone', 'password', 'role', 'photo', 'created_at', 'updated_at', 'remember_token','fname','fimg','title','description','link','fimg','simg','vidimg','vid','st','pname','prole','pdesc','pgender','planguage','presidency','paddress','pfax','pfone','pmail','psite','pareas','pimg','bimg','himg','mimg','playimg','appimg','hsimg','h1','h2','h3','h4','h5','h6','h1d','h2d','h3d','h4d','h5d','h6d','appico','plaico','fsimg','p1','p2','p3','p4','p1t','p2t','p3t','p4t','stitle','stext','ptitle1','ptext1','ptitle2','ptext2','ttitle1','ttext1','ttitle2','ttext2','timg','bt','stt','pt','bl','sl','pl','ba','sa','pa','currency','sign'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];



}
