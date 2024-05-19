<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
  <title>Lupa Password</title>
</head>

<body>

  <main class="container-fluid auth">
    <div class="container">
      <div class="row min-vh-100 mb-3 d-flex align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 offset-lg-1">
          <img src="assets/images/auth.png" class="w-75" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <h3 class="fw-semibold urbanist">Lupa Kata Sandi</h3>
          <p class="fw-normal urbanist">Silahkan masukan email anda untuk kami kirim tautan reset password.</p>

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

          <form action="/password_email" method="POST" class="mt-5">
            @csrf
            <label for="email" class="form-label urbanist">Email <span class="text-danger">*</span></label>
            <input type="email" id="email" name="email" class="form-control urbanist px-3 py-2 shadow-sm" placeholder="Email kamu" required>
            <button type="submit" class="btn-auth mt-5">Reset</button>
          </form>
        </div>
      </div>

    </div>

  </main>

</body>

</html>