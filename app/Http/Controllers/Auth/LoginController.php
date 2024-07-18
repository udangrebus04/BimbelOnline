<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected function authenticated(Request $request, $user)
    // {
    //     if ($user->role_id == '1') {
    //         return redirect()->route('/user.index'); // Ganti dengan route admin dashboard yang sesuai
    //     }

    //     return redirect('/'); // Redirect ke halaman home atau halaman lain untuk user non-admin
    // }

    protected function redirectTo()
    {
        $role_id = auth()->user()->role_id;

        if ($role_id === 1) {
            return '/user';
        } else {
            return '/bimbel';
        }
    }

    protected $redirectTo = '/user';
    //     protected function authenticated(Request $request, $user)
    // {
    //     if ($user->role === 'admin') {
    //         return redirect()->route('user.index');
    //     } else {
    //         return redirect()->route('bimbel.index');
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
}
