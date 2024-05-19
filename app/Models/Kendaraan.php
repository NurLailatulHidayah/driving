<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $fillable = [
        'nama_kendaraan',
        'kategori',
        'bbm',
        'servis_akhir',
        'pemilik',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class, 'id_kendaraan', 'id');
    }

    public function riwayat()
    {
        return $this->hasMany(RiwayatKendaraan::class, 'id_kendaraan', 'id');
    }

    public function servis()
    {
        return $this->hasMany(Servis::class, 'id_kendaraan', 'id');
    }

    public function bbm()
    {
        return $this->hasMany(Bbm::class, 'id_kendaraan', 'id');
    }
}
