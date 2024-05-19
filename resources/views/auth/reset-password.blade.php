<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <title>Reset Password</title>
</head>

<body>

  <main class="container-fluid auth">
    <div class="container">
      <div class="row min-vh-100 mb-3 d-flex align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 offset-lg-1">
          <img src="{{ asset('assets/images/auth.png') }}" class="w-75" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <h3 class="fw-semibold urbanist">Lupa Kata Sandi</h3>
          <p class="fw-normal urbanist">Masukan kata sandi baru untuk dibuat ulang.</p>

          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $errors)
              <li>{{ $errors }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if(session()->has('status'))
          <div class="alert alert-success">
            {{ session()->get('status') }}
          </div>
          @endif

          <form action="/reset-password" method="POST" class="mt-5">
            @csrf
            <input type="hidden" name="token" value="{{ request()->token }}">
            <input type="hidden" name="email" value="{{ request()->email }}">
            <label for="password_baru" class="form-label urbanist">Kata Sandi Baru<span class="text-danger">*</span></label>
            <input type="password" id="password_baru" name="password" class="form-control urbanist px-3 py-2 shadow-sm" placeholder="Masukan Kata Sandi Baru">

            <label for="konfir_password" class="form-label urbanist mt-3">Konfirmasi Kata Sandi <span class="text-danger">*</span></label>
            <input type="password" id="konfir_password" name="password_confirmation" class="form-control urbanist px-3 py-2 shadow-sm urbanist" placeholder="Masukan Ulang Kata Sandi">
            <button type="submit" class="btn-auth mt-5">Reset</button>
          </form>
        </div>
      </div>

    </div>

  </main>

</body>

</html>