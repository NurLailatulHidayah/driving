<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="stylesheet" href="../assets/vendors/sweetalert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <title>Login Driving</title>
</head>

<body>
  <main class="container-fluid auth">
    <div class="container">
      <div class="row min-vh-100 mb-3 d-flex align-items-center flex-column-reverse flex-lg-row">
        <div class="col-lg-6 offset-lg-1">
          <img src="assets/images/auth.png" class="w-75" alt="">
        </div>
        <div class="col-lg-4 col-12">
          <h3 class="fw-semibold urbanist">Login Driving</h3>
          <p class="fw-normal urbanist">Masuk dengan akun yang Anda miliki.</p>
          @if (Session()->has('notvalid'))
          {{ Session('notvalid') }}
          @endif
          <form action="/autentikasi" method="POST" class="mt-5">
            @csrf
            <label for="email" class="form-label urbanist">Email <span class="text-danger">*</span></label>
            <input type="email" id="email" name="email" class="form-control urbanist px-3 py-2 shadow-sm" placeholder="Email kamu">

            <label for="password" class="form-label urbanist mt-3">Kata Sandi <span class="text-danger">*</span></label>
            <div class="input-group">
              <input type="password" id="password" name="password" class="form-control urbanist px-3 py-2 shadow-sm urbanist" placeholder="Masukan Kata Sandi">
              <button class="btn" type="button" id="passwordToggle" style="border: 1px solid #dee2e6;">
                <i class="mdi mdi-eye"></i>
              </button>
            </div>
            <div class="form-check my-4">
              <input class="form-check-input border border-dark" type="checkbox" value="" id="rememberme">
              <label class="form-check-label urbanist" for="rememberme" name="rememberme">
                Ingat Saya
              </label>
              <a href="/lupa_sandi" class="nav-link urbanist float-end">Lupa Kata Sandi</a>
            </div>
            <button type="submit" class="btn-auth">Login</button>
          </form>
        </div>
      </div>

    </div>
  </main>

  <script src="../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      @if(session('error'))
      loginFailure("{{ session('error') }}");
      @endif

      // Aktifkan Feather Icons
      feather.replace();
    });

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    });

    function loginFailure(errorMessage) {
      Toast.fire({
        icon: 'error',
        title: errorMessage
      });
    }

    document.getElementById('passwordToggle').addEventListener('click', function() {
      var passwordInput = document.getElementById('password');
      var icon = document.querySelector('#passwordToggle i');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        icon.classList.remove('mdi-eye');
        icon.classList.add('mdi-eye-off');
      } else {
        passwordInput.type = 'password';
        icon.classList.remove('mdi-eye-off');
        icon.classList.add('mdi-eye');
      }
    });
  </script>
</body>

</html>