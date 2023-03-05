<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    use Notifiable;

    protected $guard = 'masyarakat';

    protected $fillable = [
        'name', 'username', 'password','nik','telp'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}
