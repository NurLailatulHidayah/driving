<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable, CanResetPassword, SoftDeletes;

    protected $table = 'pengguna';
    protected $rememberTokenName = '';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'email',
        'password',
        'role',
        'status',
    ];

    public $timestamps = false;
}
