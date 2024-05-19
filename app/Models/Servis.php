<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servis extends Model
{
    use HasFactory;

    protected $table = 'riwayat_kendaraan';
    protected $fillable = [
        'id_kendaraan',
        'tanggal_servis',
        'descripsi',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan', 'id');
    }
}
