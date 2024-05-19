<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbm extends Model
{
    use HasFactory;

    protected $table = 'bbm';
    protected $fillable = [
        'id_kendaraan',
        'tanggal_bbm',
        'jumlah_bbm',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id');
        return $this->hasMany(Kendaraan::class, 'jumlah_bbm', 'id');
    }
}
