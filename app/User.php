<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable

{

    protected $table ='user';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','email','password'];
    
    protected $hidden = ['password', 'remember_token'];

    public $timestamps = false;
}
