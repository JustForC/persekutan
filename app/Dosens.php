<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dosens extends Authenticatable
{
    use Notifiable;
    
    protected $guard = 'dosen';
    protected $fillable = ['nip','email','password','nama'];
    protected $hidden = ['password','remember_token'];
}
