<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswas extends Authenticatable
{
    use Notifiable;

    protected $guard = 'mahasiswa';
    protected $fillable = ['nip','email','password','nama','kelamin','npm','angkatan'];
    protected $hidden = ['password','remember_token'];
}
