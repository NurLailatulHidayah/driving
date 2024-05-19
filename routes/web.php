<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as DashboardAdmin;
use App\Http\Controllers\Teknisi\DashboardController as DashboardTeknisi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Login
// Route::get('/', [LoginController::class, 'index']);
// Route::get('/login', [LoginController::class, 'login'])->name('login');
// Route::post('/autentikasi', [LoginController::class, 'autentikasi']);
// Route::get('/status', function () {
//   return view('status');
// });

// tampilan dashboard tiap role
Route::get('/dashboard_admin', [LoginController::class, 'admin'])->middleware('Admin');
Route::get('/dashboard_teknisi', [LoginController::class, 'teknisi'])->middleware('Teknisi');

// logout
Route::post('/logout', [LogoutController::class, 'logout']);

// lupa sandi
Route::get('/lupa_sandi', [LoginController::class, 'lupasandi']);

Route::post('/password_email', [LoginController::class, 'ubahpassword']);

Route::get('/reset-password/{token}', function (string $token) {
  return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', [LoginController::class, 'resetpassword'])->name('password.update');
// Route::post('logout',LogoutController::class)->name('logout');
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/login', function () {
//   return view('login');
// });
Route::get('/dashboard', function () {
  return view('admin/dashboard');
});

Route::get('/booking', function () {
  return view('admin/booking');
});

Route::get('/tdashboard', function () {
  return view('teknisi/dashboard');
});

Route::get('/belum', function () {
  return view('teknisi/belum');
});


/*
|--------------------------------------------------------------------------
| Halaman Admin
|--------------------------------------------------------------------------
*/
// Route::get('/admin/dashboard', [DashboardAdmin::class, 'lihatTiket'])->name('admindashboard')->middleware('Admin');

// Route::get('/admin/booking', [DashboardAdmin::class, 'lihatTiket'])->name('admindashboard')->middleware('Admin');


/*
|--------------------------------------------------------------------------
| Halaman Teknisi
|--------------------------------------------------------------------------
*/
// Route::get('/teknisi/dashboard', [DashboardTeknisi::class, 'lihatTiket'])->name('teknisidashboard')->middleware('Teknisi');
