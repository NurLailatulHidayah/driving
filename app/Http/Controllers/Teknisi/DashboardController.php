<?php

namespace App\Http\Controllers\Teknisi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function lihatTiket()
    // {
    //     $teknisiId = Auth::id();

    //     $jumlahBelumDiproses = Tiket::where('id_pengguna', $teknisiId)->where('status_tiket', 'Belum Diproses')->count();
    //     $jumlahSedangDiproses = Tiket::where('id_pengguna', $teknisiId)->where('status_tiket', 'Sedang Diproses')->count();
    //     $jumlahSelesai = Tiket::where('id_pengguna', $teknisiId)->where('status_tiket', 'Selesai')->count();

    //     $tikets = Tiket::where('id_pengguna', $teknisiId)->get()->map(function ($tiket) {
    //         foreach ($tiket->getAttributes() as $key => $value) {
    //             if ($value === null) {
    //                 $tiket->{$key} = '---';
    //             }
    //         }
    //         switch ($tiket->tingkat_urgensi) {
    //             case 'Rendah':
    //                 $tiket->tingkat_urgensi = '<span class="badge bg-success">Rendah</span>';
    //                 break;
    //             case 'Sedang':
    //                 $tiket->tingkat_urgensi = '<span class="badge bg-warning">Sedang</span>';
    //                 break;
    //             case 'Tinggi':
    //                 $tiket->tingkat_urgensi = '<span class="badge bg-danger">Tinggi</span>';
    //                 break;
    //             default:
    //                 $tiket->tingkat_urgensi = '---';
    //         }

    //         switch ($tiket->status_tiket) {
    //             case 'Selesai':
    //                 $tiket->status_tiket = '<span class="badge bg-success">Selesai</span>';
    //                 break;
    //             case 'Sedang Diproses':
    //                 $tiket->status_tiket = '<span class="badge bg-warning">Sedang Diproses</span>';
    //                 break;
    //             case 'Belum Diproses':
    //                 $tiket->status_tiket = '<span class="badge bg-danger">Belum Diproses</span>';
    //                 break;
    //             default:
    //                 $tiket->status_tiket = '---';
    //         }

    //         $tiket->waktu_tiket = date_format(date_create($tiket->waktu_tiket), 'd/m/Y');
    //         return $tiket;
    //     });
    //     foreach ($tikets as $tiket) {
    //         if ($tiket->nip_dosen !== '---') {
    //             $tiket->posisi = 'Dosen';
    //         } elseif ($tiket->nim_mahasiswa !== '---') {
    //             $tiket->posisi = 'Mahasiswa';
    //         } elseif ($tiket->nik_karyawan !== '---') {
    //             $tiket->posisi = 'Karyawan';
    //         } else {
    //             $tiket->posisi = 'Tidak Diketahui';
    //         }
    //     }

    //     return view('teknisi/dashboard', [
    //         'jumlahBelumDiproses' => $jumlahBelumDiproses,
    //         'jumlahSedangDiproses' => $jumlahSedangDiproses,
    //         'jumlahSelesai' => $jumlahSelesai,
    //         'tikets' => $tikets,
    //     ]);
    // }
}
