<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambang extends Model
{
    use HasFactory;

    protected $table = 'tambang';
    protected $fillable = [
        'wilayah',
        'kantor',
    ];

    public $timestamps = false;
    public $posisi;
    public $note;
}
