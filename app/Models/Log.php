<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    use HasFactory;
    protected $table = 'log';
    protected $fillable = [
        'id_pengguna',
        'aktifitas',
        'descripsi_log',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id');
    }
}
