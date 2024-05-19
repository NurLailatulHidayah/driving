<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKendaraan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_kendaraan';
    protected $fillable = [
        'id_pengguna',
        'id_kendaraan',
        'tanggal_mulai',
        'tanggal_selesai',
        'tujuan',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id');
    }

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id');
    }
}
