<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::create([
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('admin1'),
            'role' => 'Admin',
        ]);
        Pengguna::create([
            'email' => 'teknisi1@gmail.com',
            'password' => bcrypt('teknisi1'),
            'role' => 'Teknisi',
        ]);
    }
}
