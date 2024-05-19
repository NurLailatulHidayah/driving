@extends('teknisi.template.main')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0" id="welcome">Selamat Datang di Halaman Admin! <img src="../assets/images/wave.gif" id="hand"></h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
      <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="calendar" class=" text-primary"></i></span>
      <input type="text" class="form-control border-primary bg-transparent">
    </div>
    <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="printer"></i>
      Print
    </button>
    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="download-cloud"></i>
      Download Report
    </button>
  </div>
</div>

<div class="row mt-4">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Data Laporan Kendaraan</h6>
          <!-- <button type="button" class="btn btn-primary btn-icon-text btn-xs" data-bs-toggle="modal" data-bs-target="#modalTambah">
            <i class="btn-icon-prepend" data-feather="check-square"></i>
            Pesan kendaraan
          </button> -->
          <!-- <button type="button" class="btn btn-primary  btn-xs">Pemesanan Kendaraan</button> -->
        </div>
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th class="pt-0">No</th>
                <th class="pt-0">Nama Driver</th>
                <th class="pt-0">Nama Kendaraan</th>
                <th class="pt-0">Kategori</th>
                <th class="pt-0">Wilayah</th>
                <th class="pt-0">Posisi Kantor</th>
                <th class="pt-0">Tanggal Mulai</th>
                <th class="pt-0">Tanggal Selesai</th>
                <th class="pt-0">Kendaraan Milik</th>
                <th class="pt-0">Tujuan</th>
                <th class="pt-0">Teknisi</th>
                <th class="pt-0">Status</th>
                <th class="pt-0">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ahmad</td>
                <td>Avanza</td>
                <td>Penumpang</td>
                <td>Pulau Mala Mala</td>
                <td>Kantor Pusat</td>
                <td>2024/05/18</td>
                <td>2024/05/20</td>
                <td>Perusahaan</td>
                <td>melakukan kunjungan</td>
                <td>Gria</td>
                <td><span class="badge bg-danger">belum disetujui</span></td>
                <td><button class="badge bg-info">Kerjakan</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('modals')

@endsection