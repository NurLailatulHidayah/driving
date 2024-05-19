<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class LoginController extends Controller
{
    // public function index()
    // {
    //     return view('home');
    // }

    public function login()
    {
        return view('auth.login');
    }

    // public function autentikasi(Request $request)
    // {
    //     Session::flash('email', $request->email);
    //     Session::flash('password', $request->password);

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $infologin = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     // dd($infologin);
    //     // $pengguna = Pengguna::all();
    //     // dd($pengguna);

    //     if (Auth::attempt($infologin)) {
    //         if (Auth::user()->role == 'Admin') {
    //             return redirect('/admin/dashboard');
    //         } else if (Auth::user()->role == 'Teknisi') {
    //             return redirect('/teknisi/dashboard');
    //         }
    //     } else {
    //         return  redirect('/login')->with('error', 'Masuk dengan akun yang Anda miliki');
    //     }
    // }
    public function lupasandi()
    {
        return view('auth.forgot-password');
    }

    public function ubahpassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = Password::sendResetLink(
            $request->only('email')
        );

        if ($response === null) {
            return back()->withErrors(['email' => 'Failed to send reset link. Please try again.']);
        }

        if ($response === Password::RESET_LINK_SENT) {
            return back()->with(['status' => 'Reset link sent successfully. Check your email.']);
        } else {
            return back()->withErrors(['email' => 'Failed to send reset link. Please try again.']);
        }
    }


    public function resetpassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (Pengguna $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return redirect()->route('reset-sukses')->with('status', __('Password has been reset successfully.'));
        } else {
            return back()->withErrors(['email' => [__('This password reset token is invalid.')]]);
        }
    }


    public function admin()
    {
        return redirect('/admin/dashboard');
    }

    public function teknisi()
    {
        return redirect('/teknisi/dashboard');
    }
}
