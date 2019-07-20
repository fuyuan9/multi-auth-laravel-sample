<?php

namespace App\Http\Controllers\ContactUser\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = '/contact_user/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:contact_user')->except('logout');
    }

    public function showLoginForm()
    {
        return view('contact_user.auth.login');
    }

    protected function guard()
    {
        return \Auth::guard('contact_user');
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'uid';
    }

    public function logout(Request $request)
    {
        $this->guard('contact_user')->logout();
        // $request->session()->invalidate(); // all clear session
        return redirect('/');
    }
}
