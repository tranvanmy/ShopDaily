<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Http\Requests\LoginRequest;
use App\User;
use Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $auth =
        [
            'email' => $request->email,
            'password' => $request->password,
        ];

        $rememeber = $request -> input('remember_me');
        if (Auth::attempt($auth, $rememeber)) {
            if ((Auth::user()->Level)==1) {
                      return redirect('backend/index');
            } else {
                    echo 'ban la khach moi';
                    echo Auth::user()->Full_name;
                    // return redirect('authencation/demo12');
            }
        } else {
                echo $request->email.'<br/>';
                echo $request->password.'<br/>';
                echo 'Đăng Nhập Không Thành Công!';
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
}
