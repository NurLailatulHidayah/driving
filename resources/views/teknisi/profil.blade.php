@extends('teknisi.template.main')

@section('title', 'Profil - Driving')

@section('content')
<div class="page-content mt-n4 mb-n4">
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="../assets/images/teknisi.png" class="rounded-circle" alt="Profil" style="width: 200px; height: 200px;">
                    </div>
                    <h6 class="card-title">Informasi Pribadi</h6>
                    <p class="text-muted pb-2">Mengelola informasi pribadi Anda.</p>
                    <form class="forms-sample" action="{{ route('ubah.informasi.pribadi.teknisi') }}" method="POST" id="form-informasi-pribadi">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputName1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="exampleInputName1" autocomplete="off" placeholder="Masukkan Nama Lengkap" name="nama_lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputTelp1" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="exampleInputTelp1" autocomplete="off" placeholder="Masukkan No Telepon" name="no_telepon">
                        </div>
                        <button type="submit" class="btn btn-success me-2" id="btn-informasi-pribadi">Simpan</button>
                        <button class="btn btn-secondary" onclick="resetFormInformasiPribadi()">Batal</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Informasi Akun</h6>
                    <p class="text-muted pb-2">Mengelola informasi akun email Anda.</p>
                    <form class="forms-sample" action="{{ route('ubah.informasi.akun.teknisi') }}" method="POST" id="form-informasi-akun">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" autocomplete="off" placeholder="Masukkan Email Anda" name="email">
                        </div>
                        <button type="submit" class="btn btn-success me-2" id="btn-informasi-akun">Simpan</button>
                        <button class="btn btn-secondary" onclick="resetFormInformasiAkun()">Batal</button>
                    </form>
                </div>
                <div class="card-body">
                    <h6 class="card-title">Password</h6>
                    <p class="text-muted pb-2">Minimal harus terdiri dari 8 karakter.</p>
                    <form class="forms-sample" action="{{ route('ubah.kata.sandi.teknisi') }}" method="POST" id="form-password">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Masukkan Password Anda" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="off" placeholder="Konfirmasi Password Anda" name="konfirmasiPassword">
                        </div>
                        <button type="submit" class="btn btn-success me-2" id="btn-password">Simpan</button>
                        <button class="btn btn-secondary" onclick="resetFormPassword()">Batal</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card" id="card-holder">
                <div class="card-body">
                    <div class="id-card-tag"></div>
                    <div class="id-card-tag-strip"></div>
                    <div class="id-card-hook"></div>
                    <div class="id-card-holder">
                        <div class="id-card">
                            <h2 class="p-header"><strong>Helpdesk & Ticketing</strong></h2>
                            <div class="header">
                                <img src="../assets/images/logo-itsk.png">
                            </div>
                            <h2 class="p-name">{{ auth()->user()->profil->nama_lengkap }}</h2>
                            <h3 class="p-main">Teknisi</h3>
                            <hr>
                            <p class="p-footer">{{ auth()->user()->email }}</p>
                            <p class="p-footer">{{ auth()->user()->profil->no_telepon }}</p>
                            <p class="p-footer">ITSK RS dr. Soepraoen</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function resetFormInformasiPribadi() {
        event.preventDefault();
        document.getElementById("form-informasi-pribadi").reset();
    }

    function resetFormInformasiAkun() {
        event.preventDefault();
        document.getElementById("form-informasi-akun").reset();
    }

    function resetFormPassword() {
        event.preventDefault();
        document.getElementById("form-password").reset();
    }

    $('#btn-informasi-pribadi').click(function(event) {
        event.preventDefault();
        var formData = $('#form-informasi-pribadi').serialize();
        $.ajax({
            type: 'POST',
            url: '/ubah-informasi-pribadi-teknisi',
            data: formData,
            success: function(response) {
                // Tampilkan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil! 👌🥳',
                    text: response.message,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            },
            error: function(xhr, status, error) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal! ✋😌',
                    html: errorMessage,
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    $('#btn-informasi-akun').click(function(event) {
        event.preventDefault();
        var formData = $('#form-informasi-akun').serialize();
        $.ajax({
            type: 'POST',
            url: '/ubah-informasi-akun-teknisi',
            data: formData,
            success: function(response) {
                // Tampilkan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil! 👌🥳',
                    text: response.message,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            },
            error: function(xhr, status, error) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal! ✋😌',
                    html: errorMessage,
                    confirmButtonText: 'OK'
                });
            }
        });
    });

    $('#btn-password').click(function(event) {
        event.preventDefault();
        var formData = $('#form-password').serialize();
        $.ajax({
            type: 'POST',
            url: '/ubah-kata-sandi-teknisi',
            data: formData,
            success: function(response) {
                // Tampilkan SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil! 👌🥳',
                    text: response.message,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                });
            },
            error: function(xhr, status, error) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal! ✋😌',
                    html: errorMessage,
                    confirmButtonText: 'OK'
                });
            }
        });
    });
</script>
@endpush

@push('style')
<style>
    .img-fluid {
        max-width: 90%;
        max-height: 80%;
    }

    .id-card-holder {
        width: 225px;
        padding: 4px;
        margin: 0 auto;
        background-color: #1f1f1f;
        border-radius: 5px;
        position: relative;
    }

    .id-card-holder:after {
        content: '';
        width: 7px;
        display: block;
        background-color: #0a0a0a;
        height: 100px;
        position: absolute;
        top: 105px;
        border-radius: 0 5px 5px 0;
    }

    .id-card-holder:before {
        content: '';
        width: 7px;
        display: block;
        background-color: #0a0a0a;
        height: 100px;
        position: absolute;
        top: 105px;
        left: 214px;
        border-radius: 5px 0 0 5px;
    }

    .id-card {
        background: url("../assets/images/idcard.png");
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 0 1.5px 0px #b9b9b9;
    }

    .id-card img {
        margin: 0 auto;
    }

    .header img {
        width: 150px;
        margin-top: 15px;
    }

    .p-header {
        font-size: 20px;
        margin: 5px 0;
    }

    .p-name {
        font-size: 13px;
        margin: 5px 0;
    }

    .p-main {
        font-size: 15px;
        margin: 2.5px 0;
        font-weight: 300;
    }

    .p-footer {
        font-size: 10px;
        margin: 2px;
    }

    .id-card-hook {
        background-color: black;
        width: 70px;
        margin: 0 auto;
        height: 15px;
        border-radius: 5px 5px 0 0;
    }

    .id-card-hook:after {
        content: '';
        background-color: white;
        width: 47px;
        height: 6px;
        display: block;
        margin: 0px auto;
        position: relative;
        top: 6px;
        border-radius: 4px;
    }

    .id-card-tag-strip {
        width: 45px;
        height: 40px;
        background-color: #14A44D;
        margin: 0 auto;
        border-radius: 5px;
        position: relative;
        top: 9px;
        z-index: 1;
        border: 1px solid #a11a00;
    }

    .id-card-tag-strip:after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        background-color: #a11a00;
        position: relative;
        top: 10px;
    }

    .id-card-tag {
        width: 0;
        height: 0;
        border-left: 100px solid transparent;
        border-right: 100px solid transparent;
        border-top: 100px solid #14A44D;
        margin: -10px auto -30px auto;

    }

    .id-card-tag:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        border-left: 50px solid transparent;
        border-right: 50px solid transparent;
        border-top: 100px solid white;
        margin: -10px auto -30px auto;
        position: relative;
        top: -100px;
        left: -50px;
    }


    @media only screen and (max-width: 775px) {
        .img-fluid {
            display: none;
        }
    }
</style>
@endpush