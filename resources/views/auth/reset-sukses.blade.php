<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="assets/css/app.css">
  <title>Reset Sukses</title>
</head>

<body>

  <main class="container-fluid auth">
    <div class="container">
      <div class="row min-vh-100 d-flex align-items-center">
        <div class="col-lg-6 offset-lg-1">
          <img src="assets/images/auth.png" class="w-75" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <h3 class="fw-semibold urbanist">Lupa Kata Sandi</h3>
          <p class="fw-normal urbanist">Kata Sandi Anda telah selesai diubah.</p>
          <button type="button" class="btn-auth mt-3"><a href="/login" class="nav-link">Login</a></button>
        </div>
      </div>

    </div>

  </main>

</body>

</html>