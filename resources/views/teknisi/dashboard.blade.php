@extends('teknisi.template.main')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0" id="welcome">Selamat Datang di Halaman Teknisi! <img src="../assets/images/wave.gif" id="hand"></h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group date datepicker wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
      <span class="input-group-text input-group-addon bg-transparent border-primary"><i data-feather="calendar" class=" text-primary"></i></span>
      <input type="text" class="form-control border-primary bg-transparent">
    </div>
    <!-- <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="printer"></i>
      Print
    </button> -->
    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="download-cloud"></i>
      Download Report
    </button>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-4 col-xl-4">
    <div class="card" id="card1">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h1 class="pb-2"></h1>
          <div class="pb-2"> <i data-feather="x"></i> Belum Disetujui </div>
        </div>
        <span data-peity='{"fill": ["rgb(251,188,6)"],"height": 50, "width": 80 }' class="peity-bar">5,3,9,6,5,9,7,3,5,2</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4 col-xl-4">
    <div class="card" id="card2">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h1 class="pb-2"></h1>
          <div class="pb-2"> <i data-feather="activity"></i> Ditolak </div>
        </div>
        <span data-peity='{"fill": ["rgb(251,188,6)"],"height": 50, "width": 80 }' class="peity-bar">5,3,9,6,5,9,7,3,5,2</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-4 col-xl-4">
    <div class="card" id="card3">
      <div class="card-body d-flex justify-content-between align-items-center">
        <div>
          <h1 class="pb-2"></h1>
          <div class="pb-2"> <i data-feather="check"></i> Disetujui </div>
        </div>
        <span data-peity='{"stroke": ["rgb(251,188,6)"], "fill": ["rgba(251,188,6, .2)"],"height": 50, "width": 80 }' class="peity-line">5,3,9,6,5,9,7,3,5,2</span>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4">
  <div class="col-lg-7 col-xl-8 stretch-card">
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
                <td><span class="badge bg-danger">belum disetujui</span></td>
                <td><button class="badge bg-info">Kerjakan</button></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline">
          <h6 class="card-title mb-0">Status Laporan</h6>
        </div>
        <div id="storageChart"></div>
        <div class="row mb-3">
          <div class="col-6 d-flex justify-content-end">
            <div>
              <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Belum Disetujui <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
            </div>
          </div>
          <div class="col-6">
            <div>
              <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Disetujui</label>
            </div>
          </div>
          <div class="col-6">
            <div>
              <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span class="p-1 me-1 rounded-circle bg-primary"></span> Ditolak</label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('modals')

@endsection

@push('style')
<style>
  #hand {
    width: 35px;
    margin-top: -10px;
  }

  #TabelDashboardAdmin th,
  #TabelDashboardAdmin td {
    text-align: left;
  }

  .page-item.active .page-link {
    background-color: #14A44D !important;
    border-color: #14A44D !important;
    color: white !important;
  }

  .page-link {
    color: #333333 !important;
  }

  .dataTables_empty {
    text-align: center !important;
  }

  @media only screen and (max-width: 1095px) {
    #bt-group {
      margin-top: 10px;

    }

    #top-content {
      flex-direction: column;
    }
  }

  @media only screen and (max-width: 768px) {
    #bt-group {
      margin-top: 0;
    }

    #card2 {
      margin-top: 10px;
    }

    #card3 {
      margin-top: 10px;
    }

    #TabelDashboardAdmin td {
      white-space: normal;
      word-wrap: break-word;
    }

    #TabelDashboardAdmin_filter {
      margin-top: 10px;
    }
  }

  @media only screen and (max-width: 476px) {
    #bt-group {
      margin-top: 0;
      flex-direction: column;
    }

    #welcome {
      font-size: 17px;
    }

    #bt-download {
      display: block;
      width: 100%;
    }
  }

  @media only screen and (max-width: 423px) {

    #welcome {
      font-size: 15px;
    }

    #hand {
      width: 25px;
    }
  }
</style>
@endpush